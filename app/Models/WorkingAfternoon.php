<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingAfternoon extends Model
{
    protected $fillable = [
        'country_id',
        'city_id',
        'dow',
        'start_h',
        'end_h',
        'img',
        'geo_link',
        'chat_link',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'country_id' => 'integer',
        'city_id' => 'integer',
        'dow' => 'integer',
        'start_h' => 'integer',
        'end_h' => 'integer',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
