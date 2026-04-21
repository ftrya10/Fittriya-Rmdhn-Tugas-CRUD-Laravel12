<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $fillable = [
        'nama_salon',
        'alamat',
        'telepon',
        'deskripsi'
    ];
}