<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paketwisata extends Model
{
    use HasFactory;

    protected $table = 'paketwisata';

    protected $guarded = [
        'id'
    ];

    public function Pesanan(): HasOne
    {
        return $this->hasOne(Pesanan::class);
    }
}
