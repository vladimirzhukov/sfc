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
        Schema::create('business_metas', function (Blueprint $table) {
            $table->id();
            $table->string('language', 10)->index()->nullable();
            $table->string('parameter_link', 191)->index()->nullable();
            $table->string('parameter_category', 191)->index()->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('page_h1')->nullable();
            $table->text('page_subtitle')->nullable();
            $table->text('page_h2')->nullable();
            $table->text('page_subnote')->nullable();
            $table->longText('page_seo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_metas');
    }
};
