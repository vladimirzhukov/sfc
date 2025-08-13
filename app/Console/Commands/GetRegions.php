<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Country;
use App\Models\Region;

class GetRegions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-regions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get list of regions and subregions from the Geonames';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        ini_set('memory_limit', '-1');
        $countries = Country::get()->keyBy('iso');
        $cou = file_get_contents('https://download.geonames.org/export/dump/admin1CodesASCII.txt');
        $lines = explode("\n", $cou);
        foreach ($lines as $line) {
            $data = explode("\t", $line);
            if (!empty($data[1])) {
                $cid = explode('.', $data[0]);
                if (isset($cid[0]) && isset($countries[$cid[0]])) {
                    $country = $countries[$cid[0]];
                }
                Region::updateOrCreate([
                    'country_id' => $country->id,
                    'parent_id' => 0,
                    'code' => $data[0],
                    'name' => $data[1],
                    'name_ascii' => $data[2],
                    'geoname_id' => $data[3]
                ]);
            }
        }
        $cou = file_get_contents('https://download.geonames.org/export/dump/admin2Codes.txt');
        $lines = explode("\n", $cou);
        foreach ($lines as $line) {
            $data = explode("\t", $line);
            if (!empty($data[1])) {
                $cid = explode('.', $data[0]);
                if (isset($cid[0]) && isset($countries[$cid[0]])) {
                    $country = $countries[$cid[0]];
                }
                $region = explode('.', $data[0]);
                $region = $region[0] . '.' . $region[1];
                $region = Region::where('code', $region)->first();
                if (!empty($region->id)) {
                    Region::updateOrCreate([
                        'country_id' => $country->id,
                        'parent_id' => (!empty($region->id)) ? $region->id : 0,
                        'code' => $data[0],
                        'name' => $data[1],
                        'name_ascii' => $data[2],
                        'geoname_id' => $data[3]
                    ]);
                }// else {
                    //dd($country, $region, $data);
                //}
            }
        }
    }
}
