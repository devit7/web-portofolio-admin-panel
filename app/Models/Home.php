<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'home'; // Nama tabel yang sesuai dengan migrasi
    protected $fillable = ['title', 'welcome', 'flag']; // Kolom-kolom yang dapat diisi
}
