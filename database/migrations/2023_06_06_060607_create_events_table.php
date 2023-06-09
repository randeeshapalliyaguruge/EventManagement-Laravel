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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();

            $table->string('image')->nullable();
            $table->string('event_name');

            $table->text('address');
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('latitude', 10, 8)->nullable();
            $table->string('longitude', 11, 8)->nullable();

            $table->text('description');
            $table->string('price', 10, 2);

            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');

            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();

            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('subscription_count')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
