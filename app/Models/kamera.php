<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamera extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk',
        'tipe',
        'harga_sewa',
    ];

    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class);
    }
}

