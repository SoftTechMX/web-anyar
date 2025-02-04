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
        Schema::create('ui_app_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->string('about_us')->nullable(true);
            $table->text('mision')->nullable(true);
            $table->text('vision')->nullable(true);
            $table->text('description')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('country')->nullable(true);
            $table->string('address_street')->nullable(true);
            $table->string('address_cp')->nullable(true);
            $table->string('address_number')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('twitter')->nullable(true);
            $table->string('instagram')->nullable(true);
            $table->string('skype')->nullable(true);
            $table->string('linkedin')->nullable(true);
            $table->string('youtube')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ui_app_settings');
    }
};