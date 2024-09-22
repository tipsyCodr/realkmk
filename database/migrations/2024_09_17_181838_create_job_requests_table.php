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
        Schema::create('job_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category_type')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('experience')->nullable();
            $table->string('work_field')->nullable();
            $table->string('address')->nullable();
            $table->string('photo_passport')->nullable();
            $table->string('resume')->nullable();
            $table->bigInteger('city_id')->nullable()->constrained()->nullOnDelete();
            $table->bigInteger('state_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_requests');
    }
};
