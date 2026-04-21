<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $fillable = [
        'nama_pelanggan',
        'layanan',
        'harga',
        'tanggal_booking'
    ];
}