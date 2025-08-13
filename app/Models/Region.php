<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'regions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id',
        'parent_id',
        'code',
        'name',
        'name_ascii',
        'geoname_id',
    ];

    protected $casts = [
        'country_id' => 'integer',
        'parent_id' => 'integer',
        'geoname_id' => 'integer',
    ];

    /**
     * Get the subregions for the region.
     */
    public function subregions()
    {
        return $this->hasMany(Region::class, 'parent_id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'region_id');
    }

    /**
     * Get cities in this subregion
     */
    public function subcities()
    {
        return $this->hasMany(City::class, 'subregion_id');
    }

    /**
     * Get the parent region
     */
    public function parent()
    {
        return $this->belongsTo(Region::class, 'parent_id');
    }

    /**
     * Get child regions
     */
    public function children()
    {
        return $this->hasMany(Region::class, 'parent_id');
    }

    /**
     * Scope to filter regions by country
     */
    public function scopeByCountry($query, int $countryId)
    {
        return $query->where('country_id', $countryId);
    }

    /**
     * Scope to get top-level regions (no parent)
     */
    public function scopeTopLevel($query)
    {
        return $query->where('parent_id', 0);
    }
}
