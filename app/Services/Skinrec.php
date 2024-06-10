<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class Skinrec
{
    public function recommendSkincare($productType, $skinTypes, $skinProblems, $notableEffects)
    {
        // Define all skin types
        $allskinTypes = ['sensitive', 'combination', 'oily', 'dry', 'normal'];
        $i = 0;
        $NskinTypes = [];
        
        // Create a binary array indicating the user's skin types
        foreach ($allskinTypes as $AskinType) {
            $NskinTypes[$i] = in_array($AskinType, $skinTypes) ? 1 : 0;
            $i++;
        }
        
        // Get id_category from the category table
        $id_category = DB::table('category')->where('category_name', $productType)->value('id_category');
        
        // Get the matching skin type id
        $id_skintype = DB::table('skintype')
            ->where('sensitive', $NskinTypes[0])
            ->where('combination', $NskinTypes[1])
            ->where('oily', $NskinTypes[2])
            ->where('dry', $NskinTypes[3])
            ->where('normal', $NskinTypes[4])
            ->value('id_skintype');

        // Define columns for skin problems and notable effects
        $skinProblemsColumns = ['kulit_kusam', 'jerawat', 'bekas_jerawat', 'pori_pori_besar', 'flek_hitam', 'garis_halus_dan_kerutan', 'komedo', 'warna_kulit_tidak_merata', 'kemerahan', 'kulit_kendur'];
        $notableEffectsColumns = ['acne_free', 'soothing', 'brightening', 'moisturizing', 'hydrating', 'pore_care', 'anti_aging', 'balancing', 'uv_protection', 'skin_barrier', 'refreshing', 'oil_control', 'no_whitecast', 'black_spot'];

        // Combine all columns to select
        $columnsToSelect = [
            'product_name',
            'price',
            'description',
            'picture_src',
            'rating',
            'product.id_product',
            'product.id_category',
            'product.id_brand',
            'product.id_skintype',
            'product.id_problem',
            'product.id_notable',
            'category.category_name',
            'brand.brand_name'
        ];

        // Filter products by category and skin type, then get the results as a collection
        $filteredProducts = DB::table('product')
            ->join('category', 'product.id_category', '=', 'category.id_category')
            ->join('brand', 'product.id_brand', '=', 'brand.id_brand')
            ->where('product.id_category', $id_category)
            ->where('product.id_skintype', $id_skintype)
            ->select($columnsToSelect)
            ->get(); // `get()` executes the query and returns a collection

        // Fetch related skin problems and notable effects for each product
        $filteredProducts->transform(function ($product) use ($skinProblemsColumns, $notableEffectsColumns) {
            $productSkinProblems = DB::table('skin_problem')->where('id_problem', $product->id_problem)->first();
            $productNotableEffects = DB::table('notable_effect')->where('id_notable', $product->id_notable)->first();

            $product->skin_problems = $productSkinProblems;
            $product->notable_effects = $productNotableEffects;

            return $product;
        });

        // Now we have a collection with related data, we can use map on it
        $filteredProducts = $filteredProducts->map(function ($product) use ($skinProblems, $skinProblemsColumns, $notableEffects, $notableEffectsColumns) {
            $totalSkinProblems = 0;
            $skinProblemsMatch = 0;

            foreach ($skinProblemsColumns as $column) {
                $totalSkinProblems += $product->skin_problems->$column;
                if (in_array($column, $skinProblems)) {
                    $skinProblemsMatch += $product->skin_problems->$column;
                }
            }

            $totalNotableEffects = 0;
            $notableEffectsMatch = 0;

            foreach ($notableEffectsColumns as $column) {
                $totalNotableEffects += $product->notable_effects->$column;
                if (in_array($column, $notableEffects)) {
                    $notableEffectsMatch += $product->notable_effects->$column;
                }
            }

            $skinProblemsRatio = $totalSkinProblems ? $skinProblemsMatch / $totalSkinProblems : 0;
            $notableEffectsRatio = $totalNotableEffects ? $notableEffectsMatch / $totalNotableEffects : 0;

            $product->total_score = ($skinProblemsRatio + $notableEffectsRatio) / 2;

            return $product;
        });

        // Filter and sort the products by total score
        $recommendedProducts = $filteredProducts->filter(function ($product) {
            return $product->total_score > 0;
        })->sortByDesc('total_score');

        // Map the recommended products to the desired format
        return $recommendedProducts->map(function ($product) {
            return [
                'product_name' => $product->product_name,
                'brand' => $product->brand_name,
                'price' => $product->price,
                'description' => $product->description,
                'picture_src' => $product->picture_src,
                'total_score' => $product->total_score,
                'rating' => $product->rating,
                'category_name' => $product->category_name,
            ];
        });
    }
}
