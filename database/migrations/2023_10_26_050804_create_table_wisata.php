<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// return new class extends Migration
class createTableWisata extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_wisata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gambar_wisata');
            $table->string('nm_wisata');
            $table->enum('kategori', ['Wisata Alam', 'Wisata Air', 'Wisata Buatan', 'Wisata Agro', 'Wisata Edukasi', 'Wisata Religi', 'Wisata Kerajinan', 'Wisata Sejarah', 'Wisata Kuliner', 'Wisata Budaya', 'Wisata Geopark']);
            $table->string('alamat_wisata');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('deskripsi');
            $table->string('fasilitas');
            $table->string('jam_operasional');
            $table->string('telepon');
            $table->string('hrg_tiket');
            $table->timestamps();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_wisata');
    }
};
