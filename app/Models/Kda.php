<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kda extends Model
{
    use HasFactory;

    protected $table = 'kda'; // Nama tabel dalam database
    protected $fillable = ['category', 'level', 'description','link']; // Kolom yang bisa diisi secara massal

    // Tambahkan properti atau metode lain yang Anda butuhkan
}


?>