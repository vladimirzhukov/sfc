<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;
use App\Models\Region;
use Illuminate\Support\Facades\Cache;

class CityController extends Controller
{
    public function getPopularCities(string $countryCode)
    {
        $cacheKey = 'popular_cities_' . $countryCode;
        $cities = Cache::remember($cacheKey, now()->addMonth(), function() use ($countryCode) {
            $country = Country::where('iso', '=', strtoupper($countryCode))->first();
            return City::with(['region', 'subregion'])->where([
                ['country_id', '=', $country->id],
                ['feature_code', '!=', 'PPLX']
            ])->orderBy('population', 'desc')->orderBy('name')->limit(20)->get()->map(function ($city) {
                return $this->formatCityData($city);
            });
        });
        return response()->json($cities);
    }

    public function searchCities(string $countryCode, Request $request)
    {
        $query = $request->get('q', '');
        if (strlen($query) < 2) {
            return response()->json([]);
        }
        $cacheKey = 'search_cities_' . $query . '_' . $countryCode;
        $cities = Cache::remember($cacheKey, now()->addMonth(), function() use ($countryCode, $query) {
            $country = Country::where('iso', '=', strtoupper($countryCode))->first();
            return City::with(['region', 'subregion'])->where([
                ['country_id', '=', $country->id],
                ['feature_code', '!=', 'PPLX']
            ])->where(function ($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%')->orWhere('name_ascii', 'like', '%' . $query . '%');
                //->orWhere('alternate_names', 'like', '%' . $query . '%');
            })->orderBy('population', 'desc')->orderBy('name')->limit(20)->get()->map(function ($city) {
                return $this->formatCityData($city);
            });
        });
        return response()->json($cities);
    }

    public function getCityById(int $cityId)
    {
        $city = City::with(['region', 'subregion'])->find($cityId);

        if (!$city) {
            return response()->json(['error' => 'City not found'], 404);
        }

        return response()->json($this->formatCityData($city));
    }

    private function formatCityData(City $city): array
    {
        // Get region and subregion names
        $regionName = null;
        $subregionName = null;

        if ($city->region_id && $city->region) {
            $regionName = $city->region->name;
        }

        if ($city->subregion_id && $city->subregion) {
            $subregionName = $city->subregion->name;
        }

        // If we don't have region/subregion relationships, try to get from admin codes
        if (!$regionName && $city->admin1_code) {
            $region = Region::where('country_id', $city->country_id)
                ->where('code', $city->admin1_code)
                ->first();
            if ($region) {
                $regionName = $region->name;
            }
        }

        if (!$subregionName && $city->admin2_code) {
            $subregion = Region::where('country_id', $city->country_id)
                ->where('code', $city->admin2_code)
                ->first();
            if ($subregion) {
                $subregionName = $subregion->name;
            }
        }

        return [
            'id' => $city->id,
            'name' => $city->name,
            'name_ascii' => $city->name_ascii,
            'country_code' => $city->country_code,
            'region_id' => $city->region_id,
            'subregion_id' => $city->subregion_id,
            'region_name' => $regionName,
            'subregion_name' => $subregionName,
            'population' => $city->population,
            'lat' => $city->lat,
            'lon' => $city->lon,
            'time_zone' => $city->time_zone,
            'geoname_id' => $city->geoname_id,
        ];
    }
}
