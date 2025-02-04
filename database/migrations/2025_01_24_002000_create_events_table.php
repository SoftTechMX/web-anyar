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
            $table->string('title', 100);
            $table->string('description', 100);
            $table->unsignedBigInteger('id_calendar')->nullable(false);
            $table->date('begin_date');
            $table->date('end_date');
            $table->time('begin_time');
            $table->time('end_time');
            $table->timestamps();

            $table->foreign('id_calendar')->references('id')->on('calendars')->onDelete('CASCADE')->onUpdate('CASCADE');
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
