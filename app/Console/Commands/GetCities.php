<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Models\City;
use App\Models\Country;
use App\Models\Region;

class GetCities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get list of cities by country from the Geonames';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        ini_set('memory_limit', '-1');
        $country = Country::where('active', 1)->orderBy('last_update', 'asc')->first();
        //$country = Country::where('id', 55)->orderBy('last_update', 'asc')->first();
        if (!empty($country->id)) {
            $data = file_get_contents('https://download.geonames.org/export/dump/' . $country->iso . '.zip');
            Storage::put('geonames/' . $country->iso . '.zip', $data);
            $path = storage_path('app/private/geonames/' . $country->iso . '.zip');
            $zip = new \ZipArchive;
            if ($zip->open($path) === TRUE) {
                $zip->extractTo(storage_path('app/private/geonames/' . $country->iso));
                $zip->close();
                Storage::delete('geonames/' . $country->iso . '.zip');
                $objects = Storage::get('geonames/' . $country->iso . '/' . $country->iso . '.txt');
                $lines = explode("\n", $objects);
                $objects = array();
                foreach ($lines as $line) {
                    $data = explode("\t", $line);
                    if (!empty($data[6])) {
                        if ($data[6] == 'P') {
                            $objects[] = $data;
                        }
                    }
                }
                if (!empty($objects)) {
                    foreach ($objects as $object) {
                        $city = City::where('geoname_id', $object[0])->first();
                        if (empty($city->id)) {
                            $city = new City();
                        }
                        $city->geoname_id = $object[0] ?? 0;
                        $city->name = $object[1] ?? null;
                        $city->name_ascii = $object[2] ?? null;
                        $city->alternate_names = $object[3] ?? null;
                        $city->lat = $object[4] ?? null;
                        $city->lon = $object[5] ?? null;
                        $city->feature_class = $object[6] ?? null;
                        $city->feature_code = $object[7] ?? null;
                        $city->country_code = $object[8] ?? null;
                        $city->cc2 = $object[9] ?? null;
                        $city->admin1_code = $object[10] ?? null;
                        $city->admin2_code = $object[11] ?? null;
                        $city->admin3_code = $object[12] ?? null;
                        $city->admin4_code = $object[13] ?? null;
                        $city->population = (int)($object[14] ?? 0);
                        $city->elevation = (int)($object[15] ?? 0);
                        $city->elevation_model = $object[16] ?? null;
                        $city->time_zone = $object[17] ?? null;
                        $city->modification_date = date('Y-m-d', strtotime($object[18])) ?? null;
                        $city->country_id = $country->id;
                        $city->region_id = 0;
                        if (!empty($city->admin1_code)) {
                            $region = Region::where('country_id', $country->id)->where('code', $country->iso . '.' . $city->admin1_code)->first();
                            if (!empty($region->id)) {
                                $city->region_id = $region->id;
                            }
                        }
                        $city->subregion_id = 0;
                        if (!empty($city->admin2_code)) {
                            $subregion = Region::where('country_id', $country->id)->where('code', $country->iso . '.' . $city->admin1_code . '.' . $city->admin2_code)->first();
                            if (!empty($subregion->id)) {
                                $city->subregion_id = $subregion->id;
                            }
                        }
                        $city->save();
                    }
                    $country->last_update = date('Y-m-d H:i:s');
                    $country->save();
                } else {
                    $country->last_update = date('Y-m-d H:i:s');
                    $country->save();
                }
            }
        }
    }
}
