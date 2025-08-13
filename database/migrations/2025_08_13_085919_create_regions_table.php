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
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country_id')->unsigned()->index();
            $table->bigInteger('parent_id')->unsigned()->index();
            $table->string('code', 191)->index()->nullable();
            $table->string('name', 191)->index()->nullable();
            $table->string('name_ascii', 191)->index()->nullable();
            $table->bigInteger('geoname_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
