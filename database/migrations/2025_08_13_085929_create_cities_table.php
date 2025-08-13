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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country_id')->unsigned()->index();
            $table->bigInteger('region_id')->unsigned()->index()->default(0);
            $table->bigInteger('subregion_id')->unsigned()->index()->default(0);
            $table->bigInteger('geoname_id')->unsigned()->index()->default(0);
            $table->string('name', 191)->index();
            $table->string('name_ascii', 191)->index()->nullable();
            $table->text('alternate_names')->nullable();
            $table->decimal('lat', 10, 7)->index()->nullable();
            $table->decimal('lon', 10, 7)->index()->nullable();
            $table->string('feature_class', 1)->index()->nullable();
            $table->string('feature_code', 10)->index()->nullable();
            $table->string('country_code', 2)->index()->nullable();
            $table->text('cc2')->nullable();
            $table->string('admin1_code', 20)->index()->nullable();
            $table->string('admin2_code', 80)->index()->nullable();
            $table->string('admin3_code', 20)->index()->nullable();
            $table->string('admin4_code', 20)->index()->nullable();
            $table->integer('population')->index()->default(0);
            $table->integer('elevation')->index()->nullable();
            $table->string('elevation_model', 191)->index()->nullable();
            $table->string('time_zone', 191)->index()->nullable();
            $table->date('modification_date')->index()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
