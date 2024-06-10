<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id_product';
    public $incrementing = false;

    protected $fillable = ['product_name'];

    public function toArray()
    {
        $array = parent::toArray();
        $array['id_product'] = (string) $array['id_product']; // Konversi id_brand menjadi string
        return $array;
    }
    use HasFactory;
}
