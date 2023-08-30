<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about'; // Nama tabel dalam database
    protected $fillable = ['description']; // Kolom yang bisa diisi secara massal

    // Tambahkan properti atau metode lain yang Anda butuhkan
}
?>