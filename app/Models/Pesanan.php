<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paketwisata;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'paketwisata_id',
        'users_id',
        'tanggal_pesanan',
        'tanggal_kedatangan',
        'jam_kedatangan',
        'jumlah_orang',
        'total_harga',
    ];
    // protected $guarded = [
    //    'id'
    // ];

    public function paketwisata()
    {
        return $this->belongsTo(paketwisata::class, 'paketwisata_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

}

