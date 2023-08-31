<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programproject extends Model
{
    use HasFactory;

    protected $table = 'programproject'; // Nama tabel yang sesuai dengan migrasi
    protected $fillable = ['nama_project',  'nama_program_yang_digunakan'];
}
