<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SepedaMotor extends Model
{
    protected $table = 'tb_sepeda_motor';

    protected $primaryKey = 'id_sepeda_motor';

    public $timestamps = false;

    protected $fillable = [
        'nama_produk',
        'spesifikasi',
        'harga_produk',
        'jumlah_produk'
    ];
}