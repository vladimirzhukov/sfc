<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company',
        'interest',
        'message',
        'newsletter',
        'ip_address',
        'user_agent'
    ];

    protected $casts = [
        'newsletter' => 'boolean',
        'submitted_at' => 'datetime'
    ];
}
