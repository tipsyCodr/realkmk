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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            //mandatory fields
            $table->string('listing_uid', 15);
            $table->string('ad_title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('category_type_id');
            $table->integer('category_id');
            $table->unsignedBigInteger('user_id');
            $table->text('photos')->nullable();

            //option may be null if jobs option is selected
            $table->string('location');
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->string('furnishing')->nullable();
            $table->string('construction_status')->nullable();
            $table->string('listed_by')->nullable();
            $table->string('facing')->nullable();
            $table->string('project_name')->nullable();
            $table->integer('super_builtup_area')->nullable();
            $table->integer('carpet_area')->nullable();
            $table->integer('maintainance')->nullable();
            $table->integer('total_floors')->nullable();
            $table->integer('floor_no')->nullable();
            $table->integer('car_parking')->nullable();


            //may be null if properties option is selected
            $table->string('salary_period')->nullable();
            $table->string('salary')->nullable();
            $table->string('position_type')->nullable();
            $table->integer('salary_min_range')->nullable();
            $table->integer('salary_max_range')->nullable();
            $table->integer('premium')->nullable();
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);


            //necessary for indexing, and tracking
            $table->string('slug');
            $table->dateTime('expires_at')->nullable()->constrained()->nullOnDelete();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
