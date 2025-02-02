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
        // Tabla pivote para la relación muchos a muchos
        Schema::create('category_post', function (Blueprint $table) {
            
            $table->id(); // ID único para la relación
            $table->timestamps(); // created_at y updated_at

            $table->foreignId('post_id') // Llave foránea hacia la tabla posts
                  ->constrained()
                  ->onDelete('cascade'); // Elimina la relación si se elimina el post

            $table->foreignId('category_id') // Llave foránea hacia la tabla categories
                  ->constrained()
                  ->onDelete('cascade'); // Elimina la relación si se elimina la categoría

            // Evita duplicados: un post no puede tener la misma categoría más de una vez
            $table->unique(['post_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_post');
    }
};
