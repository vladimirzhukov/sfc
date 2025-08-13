<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'about',
        'public_email',
        'public_phone',
        'fb',
        'ig',
        'tk',
        'yt',
        'fm',
        'wa',
        'tg',
        'pi',
        'th',
        'tw'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
