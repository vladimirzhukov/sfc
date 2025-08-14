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
        Schema::create('working_afternoons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id')->index();
            $table->unsignedBigInteger('city_id')->index()->nullable();
            $table->tinyInteger('dow')->index()->unsigned()->default(0);
            $table->tinyInteger('start_h')->index()->unsigned()->default(0);
            $table->tinyInteger('end_h')->index()->unsigned()->default(0);
            $table->string('img', 30)->index()->nullable();
            $table->tinyText('geo_link')->nullable();
            $table->tinyText('chat_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('working_afternoons');
    }
};
