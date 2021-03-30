<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table='barang'; //Eloquent akan membuat model barang menyimpan record di table barangs
    public $timestamps=false;
    protected $fillable = [
        'kodeBarang',
        'namaBarang',
        'kategoriBarang',
        'harga',
        'qty'
    ];
}
