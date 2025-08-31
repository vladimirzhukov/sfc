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
        Schema::table('events', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->index()->default(0.00)->after('link');
            $table->boolean('is_free')->index()->default(true)->after('price');
            $table->string('currency', 3)->index()->default('EUR')->after('is_free');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['price', 'is_free', 'currency']);
        });
    }
};
