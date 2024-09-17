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
        Schema::create('property_requests', function (Blueprint $table) {
            $table->id();
<<<<<<<<<<<<<<  ✨ Codeium Command ⭐  >>>>>>>>>>>>>>>>
            $table->string('address');
            $table->string('category');
            $table->string('city');
            $table->string('description');
            $table->string('email');
            $table->string('location');
            $table->string('max_price');
            $table->string('min_price');
            $table->string('mobile');
            $table->string('name');
            $table->string('state');
<<<<<<<  1103ef80-b12e-450d-b5c2-bd3a46a2ce74  >>>>>>>
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_requests');
    }
};
