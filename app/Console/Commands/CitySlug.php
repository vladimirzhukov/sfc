<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\City;
use Illuminate\Support\Str;

class CitySlug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:city-slug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Slugs for Cities';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $cities = City::whereNull('slug')->orWhere('slug', '')->get();
        foreach ($cities as $city) {
            $city->slug = Str::slug($city->name);
            $existingCity = City::where('slug', $city->slug)->first();
            if (!empty($existingCity->id)) {
                $city->slug .= '-' . $city->id;
            }
            $city->save();
            $this->info('Updated city: ' . $city->name . ' with slug: ' . $city->slug);
        }
        $this->info('City slug generation completed.');
    }
}
