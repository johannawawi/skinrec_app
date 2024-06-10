<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skintype extends Model
{
    protected $table = 'skintype';
    protected $primaryKey = 'id_skintype';
    public $incrementing = false;

    public function toArray()
    {
        $array = parent::toArray();
        $array['id_skintype'] = (string) $array['id_skintype']; // Konversi id_brand menjadi string
        return $array;
    }
    use HasFactory;
}
