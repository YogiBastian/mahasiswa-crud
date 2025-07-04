<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
    'nim',
    'nama',
    'jurusan',
    'tempat_lahir',
    'tanggal_lahir',
    'jenis_kelamin',
    'alamat',
    'no_hp',
    'email',
    'foto',
];

}
