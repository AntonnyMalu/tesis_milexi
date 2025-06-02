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
        Schema::create('recursos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('clases_id')->unsigned();
            $table->string('nombre');
            $table->string('descripcion');
            $table->text('imagen')->nullable();
            $table->text('video')->nullable();
            $table->text('url')->nullable();
            $table->boolean('estatus')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('clases_id')->references('id')->on('clases')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
};
