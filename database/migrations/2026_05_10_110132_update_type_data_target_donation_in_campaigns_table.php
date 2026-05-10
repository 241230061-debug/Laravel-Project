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
        Schema::table('campaigns', function (Blueprint $table) {
            // Mengubah tipe data kolom target_donation menjadi integer
            $table->integer('target_donation')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('campaigns', function (Blueprint $table) {
            // Kembalikan ke tipe data sebelumnya jika diperlukan (contoh: string)
            // $table->string('target_donation')->change();
        });
    }
};
