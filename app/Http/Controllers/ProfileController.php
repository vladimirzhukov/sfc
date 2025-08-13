<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProfileController extends Controller
{
    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480'
        ]);
        $user = auth()->user();
        try {
            if ($user->img) {
                Storage::disk('do')->delete([
                    'sfccy/avatars/' . substr($user->img, 0, 1) . '/' . substr($user->img, 0, 2) . '/' . substr($user->img, 0, 3) . '/' . $user->img,
                    'sfccy/avatars/' . substr($user->img, 0, 1) . '/' . substr($user->img, 0, 2) . '/' . substr($user->img, 0, 3) . '/th_' . $user->img
                ]);
                $user->img = null;
            }
            $file = $request->file('avatar');
            $name = Str::random(16) . '.webp';
            $manager = new ImageManager(new Driver());
            $mainImage = $manager->read($file)->cover(300, 300)->toWebp(85);
            $thumbnail = $manager->read($file)->cover(100, 100)->toWebp(80);
            Storage::disk('do')->put('sfccy/avatars/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/' . $name, $mainImage, 'public');
            Storage::disk('do')->put('sfccy/avatars/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/th_' . $name, $thumbnail, 'public');
            $user->img = $name;
            $user->save();
            return response()->json([
                'success' => true,
                'avatar_url' => 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/avatars/' . substr($user->img, 0, 1) . '/' . substr($user->img, 0, 2) . '/' . substr($user->img, 0, 3) . '/' . $user->img,
                'thumbnail_url' => 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/avatars/' . substr($user->img, 0, 1) . '/' . substr($user->img, 0, 2) . '/' . substr($user->img, 0, 3) . '/th_' . $user->img,
                'message' => __('Avatar updated successfully')
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => __('Failed to process image') . ': ' . $e->getMessage()
            ], 500);
        }
    }

    public function saveProfile(Request $request)
    {
        $user = Auth::user();
        // Validation rules
        $rules = [
            'username' => 'required|string|max:191|unique:users,name,' . $user->id,
            'password' => 'nullable|min:6|max:100',
            'first-name' => 'nullable|string|max:191',
            'last-name' => 'nullable|string|max:191',
            'about' => 'nullable|string|max:2000',
            'pe' => 'nullable|email|max:191',
            'pp' => 'nullable|string|max:20',
            'country' => [
                'nullable',
                'string',
                function ($attribute, $value, $fail) {
                    if ($value && $value !== 'UC' && !Country::where('iso', $value)->exists()) {
                        $fail(__('app.profile_invalid_country'));
                    }
                }
            ],
            'city_id' => [
                'nullable',
                'integer',
                function ($attribute, $value, $fail) use ($request) {
                    if ($value) {
                        // Only validate city exists if country is not UC
                        if ($request->input('country') !== 'UC' && !City::where('id', $value)->exists()) {
                            $fail(__('app.profile_invalid_city'));
                        }
                    }
                }
            ],
            'languages' => 'nullable|array',
            'languages.*' => 'string|max:5',
            // Social media fields
            'fb' => 'nullable|string|max:191',
            'ig' => 'nullable|string|max:191',
            'tk' => 'nullable|string|max:191',
            'yt' => 'nullable|string|max:191',
            'fm' => 'nullable|string|max:191',
            'wa' => 'nullable|string|max:191',
            'tg' => 'nullable|string|max:191',
            'li' => 'nullable|string|max:191',
            'th' => 'nullable|string|max:191',
            'tw' => 'nullable|string|max:191',
            'wb' => 'nullable|string|max:191'
        ];
        $validated = $request->validate($rules);
        try {
            \DB::beginTransaction();
            // Update main user fields
            $userUpdates = [
                'name' => $validated['username'],
            ];
            // Handle password update
            if (!empty($validated['password'])) {
                $userUpdates['password'] = Hash::make($validated['password']);
            }
            // Handle country
            $userUpdates['country_id'] = 0;
            if (!empty($request->country)) {
                if (!empty($validated['country'])) {
                    $country = Country::where('iso', $validated['country'])->first();
                    if (!empty($country->id)) {
                        $userUpdates['country_id'] = $country->id;
                    }
                }
            }
            // Handle city
            $userUpdates['city_id'] = 0;
            if (!empty($request->city_id)) {
                if (!empty($validated['city_id'])) {
                    $userUpdates['city_id'] = $validated['city_id'];
                }
            }
            $user->update($userUpdates);
            // Update or create profile
            $profileData = [
                'first_name' => $validated['first-name'] ?? null,
                'last_name' => $validated['last-name'] ?? null,
                'about' => $validated['about'] ?? null,
                'public_email' => $validated['pe'] ?? null,
                'public_phone' => $validated['pp'] ?? null,
                // Social media fields
                'fb' => $validated['fb'] ?? null,
                'ig' => $validated['ig'] ?? null,
                'tk' => $validated['tk'] ?? null,
                'yt' => $validated['yt'] ?? null,
                'fm' => $validated['fm'] ?? null,
                'wa' => $validated['wa'] ?? null,
                'tg' => $validated['tg'] ?? null,
                'li' => $validated['li'] ?? null,
                'th' => $validated['th'] ?? null,
                'tw' => $validated['tw'] ?? null,
                'wb' => $validated['wb'] ?? null
            ];
            $user->profile()->updateOrCreate(
                ['user_id' => $user->id],
                $profileData
            );
            // Handle languages
            if (isset($validated['languages'])) {
                // Delete existing languages
                $user->languages()->delete();
                // Add new languages
                foreach ($validated['languages'] as $languageCode) {
                    $user->languages()->create([
                        'language_code' => $languageCode
                    ]);
                }
            }
            \DB::commit();
            return response()->json([
                'success' => true,
                'message' => __('Profile updated successfully!')
            ]);
        } catch (\Exception $e) {
            \DB::rollback();
            return response()->json([
                'success' => false,
                'message' => __('app.profile_update_error')
                //'message' => 'An error occurred while updating your profile: ' . $e->getMessage()
            ], 500);
        }
    }
}
