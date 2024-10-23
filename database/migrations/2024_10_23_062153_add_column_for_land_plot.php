<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::table('listings', function (Blueprint $table) {
            $table->string('land_type')->nullable()->after('facing');
            $table->bigInteger('breadth')->nullable()->after('land_type');
            $table->bigInteger('length')->nullable()->after('breadth');
            $table->bigInteger('plot_area')->nullable()->after('length');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('listings', function (Blueprint $table) {
            $table->dropColumn('breadth');
            $table->dropColumn('length');
            $table->dropColumn('plot_area');
            $table->dropColumn('land_type');
        });
    }
};
