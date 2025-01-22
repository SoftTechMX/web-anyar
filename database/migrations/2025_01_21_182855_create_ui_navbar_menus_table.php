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
        Schema::create('ui_navbar_menus', function (Blueprint $table) {
            $table->id();
            $table->string('label', 150)->nullable(true)->default(null);
            $table->string('route', 150)->nullable(true)->default(null);
            $table->string('icon',  100)->nullable(true)->default(null);
            $table->unsignedBigInteger('parent_menu')->nullable(true)->default(null);
            $table->unsignedBigInteger('created_by')->nullable(true)->default(null);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('parent_menu')->references('id')->on('ui_navbar_menus')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ui_navbar_menus');
    }
};
