<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notable_effect extends Model
{
    protected $table = 'notable_effect';
    protected $primaryKey = 'id_notable';
    public $incrementing = false;

    public function toArray()
    {
        $array = parent::toArray();
        $array['id_notable'] = (string) $array['id_notable']; // Konversi id_brand menjadi string
        return $array;
    }
    use HasFactory;
}
