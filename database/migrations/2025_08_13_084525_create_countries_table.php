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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('iso', 2)->unique();
            $table->string('iso_3', 3)->unique();
            $table->string('iso_numeric', 3)->unique();
            $table->string('fips', 2)->index()->nullable();
            $table->string('name', 191)->unique();
            $table->string('capital', 191)->index()->nullable();
            $table->integer('area')->index()->default(0);
            $table->integer('population')->index()->default(0);
            $table->string('continent', 191)->index()->nullable();
            $table->string('tld', 191)->index()->nullable();
            $table->string('currency_code', 191)->index()->nullable();
            $table->string('currency_name', 191)->index()->nullable();
            $table->string('phone', 191)->index()->nullable();
            $table->string('pc_format', 191)->index()->nullable();
            $table->string('pc_regex', 191)->index()->nullable();
            $table->string('languages', 191)->index()->nullable();
            $table->bigInteger('geoname_id')->unique();
            $table->string('neighbours', 191)->index()->nullable();
            $table->string('equivalent_fips_code', 191)->index()->nullable();
            $table->boolean('active')->default(1)->index();
            $table->dateTime('last_update')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
