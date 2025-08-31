<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('startups', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->index()->default(0)->after('id');
            $table->unsignedBigInteger('city_id')->index()->default(0)->after('country_id');
            $table->decimal('lat',18, 15)->index()->default(0.000000000000000)->after('active');
            $table->decimal('lon',18, 15)->index()->default(0.000000000000000)->after('lat');
            $table->boolean('is_online')->index()->default(false)->after('lon');
            $table->string('location', 191)->index()->nullable()->after('is_online');
            $table->string('link', 191)->index()->nullable()->after('location');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('startups', function (Blueprint $table) {
            $table->dropColumn(['country_id', 'city_id', 'lat', 'lon', 'is_online', 'location', 'link']);
        });
    }
};
