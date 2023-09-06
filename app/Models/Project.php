<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project'; // Nama tabel yang sesuai dengan migrasi
    protected $fillable = ['title', 'description', 'image','link_project'];
}
