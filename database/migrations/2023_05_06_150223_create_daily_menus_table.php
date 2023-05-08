<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('daily_menus', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('soup_id')->nullable();
            $table->foreignId('main_course_id')->nullable();
            $table->foreignId('side_dish_id')->nullable();
            $table->foreignId('salad_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('daily_menus');
    }
};
