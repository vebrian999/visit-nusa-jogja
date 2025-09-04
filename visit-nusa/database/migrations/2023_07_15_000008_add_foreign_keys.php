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
        // Add foreign keys to galeri_pakets table
        Schema::table('galeri_pakets', function (Blueprint $table) {
            $table->foreign('paket_wisata_id')->references('id')->on('paket_wisatas')->onDelete('cascade');
        });

        // Add foreign keys to itinerary_pakets table
        Schema::table('itinerary_pakets', function (Blueprint $table) {
            $table->foreign('paket_wisata_id')->references('id')->on('paket_wisatas')->onDelete('cascade');
        });

        // Add foreign keys to highlight_pakets table
        Schema::table('highlight_pakets', function (Blueprint $table) {
            $table->foreign('paket_wisata_id')->references('id')->on('paket_wisatas')->onDelete('cascade');
        });

        // Add foreign keys to include_exclude_pakets table
        Schema::table('include_exclude_pakets', function (Blueprint $table) {
            $table->foreign('paket_wisata_id')->references('id')->on('paket_wisatas')->onDelete('cascade');
        });

        // Add foreign keys to review_pakets table
        Schema::table('review_pakets', function (Blueprint $table) {
            $table->foreign('paket_wisata_id')->references('id')->on('paket_wisatas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign keys to galeri_reviews table
        Schema::table('galeri_reviews', function (Blueprint $table) {
            $table->foreign('review_id')->references('id')->on('review_pakets')->onDelete('cascade');
        });

        // Add foreign keys to paket_hargas table
        Schema::table('paket_hargas', function (Blueprint $table) {
            $table->foreign('paket_wisata_id')->references('id')->on('paket_wisatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove foreign keys from galeri_pakets table
        Schema::table('galeri_pakets', function (Blueprint $table) {
            $table->dropForeign(['paket_wisata_id']);
        });

        // Remove foreign keys from itinerary_pakets table
        Schema::table('itinerary_pakets', function (Blueprint $table) {
            $table->dropForeign(['paket_wisata_id']);
        });

        // Remove foreign keys from highlight_pakets table
        Schema::table('highlight_pakets', function (Blueprint $table) {
            $table->dropForeign(['paket_wisata_id']);
        });

        // Remove foreign keys from include_exclude_pakets table
        Schema::table('include_exclude_pakets', function (Blueprint $table) {
            $table->dropForeign(['paket_wisata_id']);
        });

        // Remove foreign keys from review_pakets table
        Schema::table('review_pakets', function (Blueprint $table) {
            $table->dropForeign(['paket_wisata_id']);
            $table->dropForeign(['user_id']);
        });

        // Remove foreign keys from galeri_reviews table
        Schema::table('galeri_reviews', function (Blueprint $table) {
            $table->dropForeign(['review_id']);
        });

        // Remove foreign keys from paket_hargas table
        Schema::table('paket_hargas', function (Blueprint $table) {
            $table->dropForeign(['paket_wisata_id']);
        });
    }
};
