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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index()->default(0);
            $table->string('slug', 191)->index()->nullable();
            $table->string('name', 191)->index()->nullable();
            $table->string('categories', 191)->index()->nullable();
            $table->text('description')->nullable();
            $table->string('img', 191)->index()->nullable();
            $table->decimal('lat',18, 15)->index()->default(0.000000000000000);
            $table->decimal('lon',18, 15)->index()->default(0.000000000000000);
            $table->boolean('is_online')->index()->default(false);
            $table->string('location', 191)->index()->nullable();
            $table->string('link', 191)->index()->nullable();
            $table->boolean('active')->index()->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
