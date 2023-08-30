<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proglanguage extends Model
{
    use HasFactory;

    protected $table = 'proglanguage'; // Nama tabel dalam database
    protected $fillable = ['name']; // Kolom yang bisa diisi secara massal
}
