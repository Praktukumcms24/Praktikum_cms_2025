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
        Schema::table('pelanggan', function (Blueprint $table) {
            // Menambahkan kolom 'no_telepon' pada tabel 'pelanggan'
            $table->string('no_telepon')->after('alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            // Menghapus kolom 'no_telepon' pada tabel 'pelanggan' jika migrasi dibatalkan
            $table->dropColumn('no_telepon');
        });
    }
};
