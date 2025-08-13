<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Country;

class GetCountries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-countries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get list of countries from the Geonames';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $cou = file_get_contents('https://download.geonames.org/export/dump/countryInfo.txt');
        $lines = explode("\r\n", $cou);
        foreach ($lines as $line) {
            $symbol = mb_substr($line, 0, 1);
            if ($symbol != '#') {
                $data = explode("\t", $line);
                if (!empty($data[1])) {
                    $country = Country::where('iso', $data[0])->first();
                    if (empty($country->id)) {
                        $country = new Country();
                    }
                    $country->iso = $data[0];
                    $country->iso_3 = $data[1];
                    $country->iso_numeric = $data[2];
                    $country->fips = $data[3];
                    $country->name = trim($data[4]);
                    $country->capital = trim($data[5]) ?? null;
                    $country->area = (int)($data[6] ?? 0);
                    $country->population = (int)($data[7] ?? 0);
                    $country->continent = $data[8] ?? null;
                    $country->tld = $data[9] ?? null;
                    $country->currency_code = $data[10] ?? null;
                    $country->currency_name = $data[11] ?? null;
                    $country->phone = $data[12] ?? null;
                    $country->pc_format = $data[13] ?? null;
                    $country->pc_regex = $data[14] ?? null;
                    $country->languages = $data[15] ?? null;
                    $country->geoname_id = $data[16];
                    $country->neighbours = $data[17] ?? null;
                    $country->equivalent_fips_code = $data[18] ?? null;
                    if ($data[0] == 'CS' || $data[0] == 'AN') {
                        $country->active = 0;
                    }
                    $country->last_update = date('Y-m-d H:i:s');
                    $country->save();
                }
            }
        }
    }
}
