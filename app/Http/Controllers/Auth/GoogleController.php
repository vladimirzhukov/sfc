<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    private function generateUniqueUsername($email)
    {
        $baseName = Str::before($email, '@');
        if (strlen($baseName) > 23) {
            $baseName = substr($baseName, 0, 23);
        }
        $name = $baseName;
        $counter = 1;

        while (User::where('name', $name)->exists()) {
            $name = $baseName . $counter;
            ++$counter;
        }

        return $name;
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $finduser = User::where('google_id', $user->id)->first();
            $avatar = $user->getAvatar();
            $fullName = $user->getName();
            $nameParts = explode(' ', $fullName, 2);
            $firstName = $nameParts[0] ?? '';
            $lastName = $nameParts[1] ?? '';
            if (!empty($finduser->id)) {
                if (empty($finduser->img) && !empty($avatar)) {
                    try {
                        $file = Http::get($avatar)->body();
                        $name = Str::random(16) . '.webp';
                        $manager = new ImageManager(new Driver());
                        $mainImage = $manager->read($file)->cover(300, 300)->toWebp(85);
                        $thumbnail = $manager->read($file)->cover(100, 100)->toWebp(80);
                        Storage::disk('do')->put('sfccy/avatars/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/' . $name, $mainImage, 'public');
                        Storage::disk('do')->put('sfccy/avatars/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/th_' . $name, $thumbnail, 'public');
                        $finduser->img = $name;
                        $finduser->save();
                        if (!empty($firstName)) {
                            $checkProfile = UserProfile::where('user_id', $finduser->id)->first();
                            if (empty($checkProfile->id)) {
                                $profile = new UserProfile();
                                $profile->user_id = $finduser->id;
                                $profile->first_name = (!empty($firstName)) ? $firstName : null;
                                $profile->last_name = (!empty($lastName)) ? $lastName : null;
                                $profile->save();
                            }
                        }
                    } catch (\Exception $e) {
                        Log::error('Failed to download/process avatar: ' . $e->getMessage());
                    }
                }
                Auth::login($finduser, true);
                return redirect()->route('app::index');
            } else {
                $checkEmail = User::where('email', $user->email)->first();
                if (!empty($checkEmail->id)) {
                    $checkEmail->google_id = $user->id;
                    if (empty($checkEmail->email_verified_at)) {
                        $checkEmail->email_verified_at = date('Y-m-d H:i:s');
                    }
                    $checkEmail->save();
                    if (empty($checkEmail->img) && !empty($avatar)) {
                        try {
                            $file = Http::get($avatar)->body();
                            $name = Str::random(16) . '.webp';
                            $manager = new ImageManager(new Driver());
                            $mainImage = $manager->read($file)->cover(300, 300)->toWebp(85);
                            $thumbnail = $manager->read($file)->cover(100, 100)->toWebp(80);
                            Storage::disk('do')->put('sfccy/avatars/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/' . $name, $mainImage, 'public');
                            Storage::disk('do')->put('sfccy/avatars/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/th_' . $name, $thumbnail, 'public');
                            $checkEmail->img = $name;
                            $checkEmail->save();
                            if (!empty($firstName)) {
                                $checkProfile = UserProfile::where('user_id', $checkEmail->id)->first();
                                if (empty($checkProfile->id)) {
                                    $profile = new UserProfile();
                                    $profile->user_id = $checkEmail->id;
                                    $profile->first_name = (!empty($firstName)) ? $firstName : null;
                                    $profile->last_name = (!empty($lastName)) ? $lastName : null;
                                    $profile->save();
                                }
                            }
                        } catch (\Exception $e) {
                            Log::error('Failed to download/process avatar: ' . $e->getMessage());
                        }
                    }
                    Auth::login($checkEmail, true);
                } else {
                    $newUser = User::create([
                        'name' => $this->generateUniqueUsername($user->email),
                        'email' => $user->email,
                        'google_id' => $user->id,
                        'email_verified_at' => date('Y-m-d H:i:s'),
                        'password' => Hash::make(Str::random(8))
                    ]);
                    if (!empty($avatar)) {
                        try {
                            $file = Http::get($avatar)->body();
                            $name = Str::random(16) . '.webp';
                            $manager = new ImageManager(new Driver());
                            $mainImage = $manager->read($file)->cover(300, 300)->toWebp(85);
                            $thumbnail = $manager->read($file)->cover(100, 100)->toWebp(80);
                            Storage::disk('do')->put('sfccy/avatars/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/' . $name, $mainImage, 'public');
                            Storage::disk('do')->put('sfccy/avatars/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/th_' . $name, $thumbnail, 'public');
                            $newUser->img = $name;
                            $newUser->save();
                            if (!empty($firstName)) {
                                $checkProfile = UserProfile::where('user_id', $newUser->id)->first();
                                if (empty($checkProfile->id)) {
                                    $profile = new UserProfile();
                                    $profile->user_id = $newUser->id;
                                    $profile->first_name = (!empty($firstName)) ? $firstName : null;
                                    $profile->last_name = (!empty($lastName)) ? $lastName : null;
                                    $profile->save();
                                }
                            }
                        } catch (\Exception $e) {
                            Log::error('Failed to download/process avatar: ' . $e->getMessage());
                        }
                    }
                    Auth::login($newUser, true);
                }
                return redirect()->route('app::index');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
