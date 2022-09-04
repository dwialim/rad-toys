<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function produk(){
        return $this->hasMany(Produk::Class);
    }

    public function stokProduk(){
        return $this->hasMany(StokProduk::Class);
    }
}
