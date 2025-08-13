<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'country_id',
        'region_id',
        'subregion_id',
        'geoname_id',
        'name',
        'name_ascii',
        'alternate_names',
        'lat',
        'lon',
        'feature_class',
        'feature_code',
        'country_code',
        'cc2',
        'admin1_code',
        'admin2_code',
        'admin3_code',
        'admin4_code',
        'population',
        'elevation',
        'elevation_model',
        'time_zone',
        'modification_date',
    ];

    protected $casts = [
        'lat' => 'decimal:7',
        'lon' => 'decimal:7',
        'population' => 'integer',
        'elevation' => 'integer',
        'modification_date' => 'date',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function subregion()
    {
        return $this->belongsTo(Region::class, 'subregion_id');
    }

    public function scopeByCountryCode($query, string $countryCode)
    {
        return $query->where('country_code', strtoupper($countryCode));
    }

    public function scopeSearchByName($query, string $searchTerm)
    {
        return $query->where(function ($q) use ($searchTerm) {
            $q->where('name', 'like', '%' . $searchTerm . '%')->orWhere('name_ascii', 'like', '%' . $searchTerm . '%');
            //->orWhere('alternate_names', 'like', '%' . $searchTerm . '%');
        });
    }

    public function scopePopular($query)
    {
        return $query->orderBy('population', 'desc');
    }
}
