<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'idBarang';

    protected $fillable = [
        'namaBarang',
        'hargaBarangCash',
        'hargaBarangTempo',
    ];
}
