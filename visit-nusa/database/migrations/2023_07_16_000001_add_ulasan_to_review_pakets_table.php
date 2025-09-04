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
        Schema::table('review_pakets', function (Blueprint $table) {
            $table->text('ulasan')->nullable()->after('rating');
            $table->string('user_name')->nullable()->after('user_id');
            $table->string('user_avatar')->nullable()->after('user_name');
            $table->string('user_country')->nullable()->after('user_avatar');
            
            // Rename komentar to avoid duplication with ulasan
            $table->renameColumn('komentar', 'komentar_admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('review_pakets', function (Blueprint $table) {
            $table->dropColumn('ulasan');
            $table->dropColumn('user_name');
            $table->dropColumn('user_avatar');
            $table->dropColumn('user_country');
            
            // Rename back
            $table->renameColumn('komentar_admin', 'komentar');
        });
    }
};
