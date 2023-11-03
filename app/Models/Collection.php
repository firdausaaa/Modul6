<?php
//Firdaus Akbar Amrullah 6706223004
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'jenis',
        'created_at',
        'jumlahAwal',
        'jumlahSisa',
        'jumlahKeluar',
    ];
}
