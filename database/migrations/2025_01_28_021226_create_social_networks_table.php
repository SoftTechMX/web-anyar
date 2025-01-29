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
        $this->down();
        
        Schema::create('social_networks', function (Blueprint $table) {
            $table->id();
            $table->string('facebook')->nullable(true)->default(null);
            $table->string('tiktok')->nullable(true)->default(null);
            $table->string('linkedin')->nullable(true)->default(null);
            $table->string('github')->nullable(true)->default(null);
            $table->string('instagram')->nullable(true)->default(null);
            $table->string('telegram')->nullable(true)->default(null);
            $table->string('youtube')->nullable(true)->default(null);
            $table->string('snapchat')->nullable(true)->default(null);
            $table->unsignedBigInteger('id_person');

            $table->foreign('id_person')->references('id')->on('people')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_networks');
    }
};
