<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanMasyarakat extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai dengan konvensi, tambahkan deklarasi di bawah
    protected $table = 'pertanyaan_masyarakat';

    // Jika Anda ingin mengizinkan kolom tertentu untuk diisi secara massal
    protected $fillable = [
        'pertanyaan',

    ];
}
