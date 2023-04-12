<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kamera_id',
        'pelanggan_id',
        'tanggal_sewa',
        'tanggal_kembali',
        'harga_sewa',
    ];

    public function kamera()
    {
        return $this->belongsTo(Kamera::class);
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
