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
        Schema::create('ui_app_settings_by_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_configuration');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('id_configuration')
                ->references('id')
                ->on('ui_app_settings')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->unique(['id_configuration', 'id_user']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ui_app_settings_by_users');
    }
};
