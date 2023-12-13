<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $primaryKey = 'id_product';
    protected $fillable = ['nama_product', 'harga_product', 'deskripsi_product', 'Alamat', 'img_url_product'];
}
