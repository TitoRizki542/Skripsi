<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    protected $table = "pengunjung";

    protected $fillable = [
        'user_id',
        'nama',
        'alamat',
        'nomor_hp',
        'jenis_kelamin',
    ];

    public function pesanan(): HasOne
    {
        return $this->hasOne(Pesanan::class);
    }
    public function users(): HasOne
    {
        return $this->belongsTo(User::class);
    }
}
