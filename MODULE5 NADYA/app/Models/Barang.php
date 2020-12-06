<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'input_barang';
    protected $fillable = ['product_name','product_price','product_quantity','product_category','product_description','gambar'];
    public $timestamps = false;
}
