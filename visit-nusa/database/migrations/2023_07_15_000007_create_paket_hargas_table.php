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
        Schema::create('paket_hargas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_wisata_id');
            $table->enum('tipe_hari', ['WEEKDAY', 'WEEKEND', 'HOLIDAY']);
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_hargas');
    }
};
