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
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id')->unsigned()->index()->default(0);
            $table->string('slug', 191)->index()->nullable();
            $table->string('name', 191)->index()->nullable();
            $table->text('name_translations')->nullable();
            $table->text('scom')->nullable();
            $table->text('scom_translations')->nullable();
            $table->integer('ord')->index()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_categories');
    }
};
