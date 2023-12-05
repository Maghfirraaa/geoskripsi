<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createTableFasilitas extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_fasilitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_fasilitas');
            $table->enum('kategori', ['Hotel', 'Tempat Makan', 'Tour and Travel']);
            $table->string('alamat');
            $table->string('telepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_fasilitas');
    }
};
