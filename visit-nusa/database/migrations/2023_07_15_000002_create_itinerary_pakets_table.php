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
        Schema::create('itinerary_pakets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_wisata_id');
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('durasi')->nullable();
            $table->enum('jenis', ['PICKUP', 'DESTINATION', 'DROPOFF', 'TRANSPORT']);
            $table->string('lokasi_nama');
            $table->decimal('lokasi_lat', 10, 8)->nullable();
            $table->decimal('lokasi_lng', 11, 8)->nullable();
            $table->integer('urutan')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itinerary_pakets');
    }
};
