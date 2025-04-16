<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggans';

    // Tentukan kolom yang bisa diisi
    protected $fillable = ['nama', 'email', 'alamat'];
}
