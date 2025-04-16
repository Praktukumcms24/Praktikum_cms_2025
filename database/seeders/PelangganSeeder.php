<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pelanggan')->insert([
            [
                'nama' => 'Andi',
                'email' => 'andi@mail.com',
                'alamat' => 'Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi',
                'email' => 'budi@mail.com',
                'alamat' => 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Cici',
                'email' => 'cici@mail.com',
                'alamat' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
