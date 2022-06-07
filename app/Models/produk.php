<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kategori;

class produk extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function kategori()
    {
        return $this->hasOne('App\Models\kategori','id','id_kategori');
    }
use HasFactory;
}
