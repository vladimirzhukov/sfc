<?php

namespace Database\Seeders;

use App\Models\WorkingAfternoon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingAfternoons extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $afternoons = [
            [
                'country_id' => 55,
                'city_id' => 172,
                'dow' => 4,
                'start_h' => 14,
                'end_h' => 18,
                'img' => 'pissouri.png',
                'geo_link' => 'https://maps.app.goo.gl/SYweEbRiAu99d39dA',
                'chat_link' => 'https://chat.whatsapp.com/DJuxyV8CueS6kzEID5WOTQ'
            ]
        ];
        foreach ($afternoons as $afternoon) {
            DB::table('working_afternoons')->insert([
                'country_id' => $afternoon['country_id'],
                'city_id' => $afternoon['city_id'],
                'dow' => $afternoon['dow'],
                'start_h' => $afternoon['start_h'],
                'end_h' => $afternoon['end_h'],
                'img' => $afternoon['img'],
                'geo_link' => $afternoon['geo_link'],
                'chat_link' => $afternoon['chat_link'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
