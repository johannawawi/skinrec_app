<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class search extends Controller
{
    public function compareAttributes($table, $attribute)
    {
        $attributes = Schema::getColumnListing($table);
        $results = [];
        foreach ($attributes as $attribute) {
            $results = array_merge($results, DB::table($table)->where($attribute, 'LIKE', '%' . $attribute . '%')->get()->toArray());
        }
        return $results;
    }
}
