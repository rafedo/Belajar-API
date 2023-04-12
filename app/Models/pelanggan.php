<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'email',
    ];

    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class);
    }
}
