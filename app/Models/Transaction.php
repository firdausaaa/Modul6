<?php
//Firdaus Akbar Amrullah 6706223004
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'userIdPetugas',
        'userIdPeminjam',
        'tanggalPinjam',
        'tanggalSelesai',
    ];
}
