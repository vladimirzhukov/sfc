<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TelegramService
{
    private $botToken;
    private $chatId;

    public function __construct()
    {
        $this->botToken = config('services.telegram.bot_token');
        $this->chatId = config('services.telegram.chat_id', '-4914189896');
    }

    public function sendMessage(string $message, array $options = []): bool
    {
        if (empty($this->botToken)) {
            Log::error('Telegram bot token not configured');
            return false;
        }

        try {
            $response = Http::timeout(10)->post("https://api.telegram.org/bot{$this->botToken}/sendMessage", [
                'chat_id' => $this->chatId,
                'text' => $message,
                'parse_mode' => 'Markdown',
                'disable_web_page_preview' => true,
                ...$options
            ]);

            if ($response->successful()) {
                Log::info('Telegram message sent successfully');
                return true;
            } else {
                Log::error('Telegram API error', [
                    'status' => $response->status(),
                    'response' => $response->body()
                ]);
                return false;
            }

        } catch (\Exception $e) {
            Log::error('Failed to send Telegram message: ' . $e->getMessage());
            return false;
        }
    }

    public function sendMessageToChat(string $chatId, string $message, array $options = []): bool
    {
        if (empty($this->botToken)) {
            Log::error('Telegram bot token not configured');
            return false;
        }

        try {
            $response = Http::timeout(10)->post("https://api.telegram.org/bot{$this->botToken}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'Markdown',
                'disable_web_page_preview' => true,
                ...$options
            ]);

            if ($response->successful()) {
                Log::info('Telegram message sent successfully to chat: ' . $chatId);
                return true;
            } else {
                Log::error('Telegram API error', [
                    'chat_id' => $chatId,
                    'status' => $response->status(),
                    'response' => $response->body()
                ]);
                return false;
            }

        } catch (\Exception $e) {
            Log::error('Failed to send Telegram message: ' . $e->getMessage(), [
                'chat_id' => $chatId
            ]);
            return false;
        }
    }
}
