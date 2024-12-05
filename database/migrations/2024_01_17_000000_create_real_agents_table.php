<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('real_agents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('state');
            $table->string('city');
            $table->string('area');
            $table->enum('experience', ['1 year', '3 years', '5+ years']);
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('ifsc_code');
            $table->string('pan_card');
            $table->string('aadhar_card');
            $table->string('passport_photo');
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('real_agents');
    }
};
