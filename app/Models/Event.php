<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use League\CommonMark\CommonMarkConverter;

class Event extends Model
{
    protected $fillable = [
        'user_id',
        'slug',
        'name',
        'categories',
        'languages',
        'description',
        'img',
        'start_date',
        'end_date',
        'timezone',
        'lat',
        'lon',
        'is_online',
        'location',
        'link',
        'price',
        'is_free',
        'currency',
        'active',
        'country_id',
        'city_id'
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'is_online' => 'boolean',
        'is_free' => 'boolean',
        'active' => 'boolean',
        'lat' => 'decimal:15',
        'lon' => 'decimal:15',
        'price' => 'decimal:2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getDescriptionHtmlAttribute()
    {
        if (empty($this->description)) {
            return '';
        }
        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);
        return $converter->convert($this->description)->getContent();
    }

    public function getFormattedPriceAttribute()
    {
        if ($this->is_free) {
            return __('Free');
        }
        return '€' . number_format($this->price, 2);
    }

    // Check if event has pricing
    public function getHasPricingAttribute()
    {
        return !$this->is_free && $this->price > 0;
    }
}
