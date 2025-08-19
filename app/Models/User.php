<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'email_verified_at',
        'referral_id',
        'phone',
        'active',
        'user_role',
        'img',
        'birthday',
        'country_id',
        'city_id',
        'city_text',
        'last_seen'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function languages()
    {
        return $this->hasMany(UserLanguage::class);
    }

    public function getLastSeenAttribute($value)
    {
        return $value ? Carbon::parse($value) : null;
    }

    /**
     * Check if user is online (seen within last 5 minutes)
     */
    public function isOnline()
    {
        return $this->last_seen && $this->last_seen->gt(Carbon::now()->subMinutes(5));
    }

    /**
     * Get formatted last seen time
     */
    public function getLastSeenFormatted()
    {
        if (!$this->last_seen) {
            return __('Never');
        }
        if ($this->isOnline()) {
            return __('Online');
        }
        return $this->last_seen->diffForHumans();
    }

    /**
     * Get online status as string
     */
    public function getOnlineStatus()
    {
        if ($this->isOnline()) {
            return 'online';
        }
        if ($this->last_seen && $this->last_seen->gt(Carbon::now()->subHour())) {
            return 'away';
        }
        return 'offline';
    }
}
