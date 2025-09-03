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
        Schema::create('paket_wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->string('gambar'); // path gambar
            $table->string('durasi'); // contoh: "3 Hari 2 Malam"
            $table->enum('tipe', ['DAY_TRIP', 'MULTI_DAY']); // DAY_TRIP, MULTI_DAY
            $table->decimal('harga_awal', 10, 2);
            $table->decimal('harga_diskon', 10, 2)->nullable();
            $table->string('tipe_tour'); // Private tour, Group tour, dll
            $table->string('group_type'); // Small group, Large group, dll
            $table->decimal('rating', 3, 2)->default(0); // 0.00 - 5.00
            $table->integer('total_review')->default(0);
            $table->string('lokasi')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_wisatas');
    }
};
