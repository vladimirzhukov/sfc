<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TelegramService;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    protected $telegramService;

    public function __construct(TelegramService $telegramService)
    {
        $this->telegramService = $telegramService;
    }

    public function submit(Request $request)
    {
        $requestData = $request->all();
        $requestData['newsletter'] = isset($requestData['newsletter']) && ($requestData['newsletter'] === '1' || $requestData['newsletter'] === 'on');
        $validator = Validator::make($requestData, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'interest' => 'nullable|string|in:membership,events,working-afternoons,mentorship,partnership,speaking,sponsorship,other',
            'message' => 'required|string|max:2000',
            'newsletter' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $data = $validator->validated();

            // Format message for Telegram
            $telegramMessage = $this->formatTelegramMessage($data);

            // Send to Telegram
            $telegramSent = $this->telegramService->sendMessage($telegramMessage);

            if (!$telegramSent) {
                \Log::error('Failed to send contact form message to Telegram', $data);
            }

            // Optionally store in database
            // ContactForm::create($data);

            // Send email notification (optional)
            // Mail::to(config('mail.contact_email'))->send(new ContactFormSubmitted($data));

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully.'
            ]);

        } catch (\Exception $e) {
            \Log::error('Contact form submission error: ' . $e->getMessage(), [
                'data' => $request->all(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again or contact us directly.'
            ], 500);
        }
    }

    private function formatTelegramMessage(array $data): string
    {
        $interestLabels = [
            'membership' => 'Community Membership',
            'events' => 'Attending Events',
            'working-afternoons' => 'Working Afternoons',
            'mentorship' => 'Mentorship Program',
            'partnership' => 'Partnership Opportunities',
            'speaking' => 'Speaking at Events',
            'sponsorship' => 'Sponsorship',
            'other' => 'Other'
        ];

        $message = "🚀 *New Contact Form Submission - SFC.CY*\n\n";
        $message .= "👤 *Name:* {$data['first_name']} {$data['last_name']}\n";
        $message .= "📧 *Email:* {$data['email']}\n";

        if (!empty($data['phone'])) {
            $message .= "📱 *Phone:* {$data['phone']}\n";
        }

        if (!empty($data['company'])) {
            $message .= "🏢 *Company:* {$data['company']}\n";
        }

        if (!empty($data['interest'])) {
            $interest = $interestLabels[$data['interest']] ?? $data['interest'];
            $message .= "🎯 *Interest:* {$interest}\n";
        }

        $message .= "\n💬 *Message:*\n{$data['message']}\n";

        if (!empty($data['newsletter'])) {
            $message .= "\n📮 *Newsletter:* Yes, wants to subscribe\n";
        }

        $message .= "\n⏰ *Submitted:* " . now()->format('Y-m-d H:i:s T');

        return $message;
    }
}
