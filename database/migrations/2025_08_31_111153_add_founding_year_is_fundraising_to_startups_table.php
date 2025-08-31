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
            $table->smallInteger('founding_year')->index()->nullable()->after('description');
            $table->boolean('is_fundraising')->index()->default(0)->after('founding_year');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('startups', function (Blueprint $table) {
            $table->dropColumn('founding_year');
            $table->dropColumn('is_fundraising');
        });
    }
};
