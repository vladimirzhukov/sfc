<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLanguage extends Model
{
    protected $fillable = [
        'user_id',
        'language_code'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
