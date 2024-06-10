<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skin_problem extends Model
{
    protected $table = 'skin_problem';
    protected $primaryKey = 'id_problem';
    public $incrementing = false;

    public function toArray()
    {
        $array = parent::toArray();
        $array['id_problem'] = (string) $array['id_problem']; // Konversi id_brand menjadi string
        return $array;
    }
    use HasFactory;
}
