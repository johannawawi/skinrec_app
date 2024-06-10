<?php

use App\Http\Controllers\Api\BrandControllerAPI;
use App\Http\Controllers\Api\CategoryControllerAPI;
use App\Http\Controllers\Api\NotableControllerAPI;
use App\Http\Controllers\Api\ProductControllerAPI;
use App\Http\Controllers\Api\SkinProblemControllerAPI;
use App\Http\Controllers\Api\SkinTypeControllerAPI;
use App\Http\Controllers\search;
use App\Http\Controllers\SkincareRecomendationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::apiResource('/api/brand',BrandControllerAPI::class);
Route::apiResource('/api/category',CategoryControllerAPI::class);
Route::apiResource('/api/product',ProductControllerAPI::class);
Route::apiResource('/api/skintype',SkinTypeControllerAPI::class);
Route::apiResource('/api/notable',NotableControllerAPI::class);
Route::apiResource('/api/skinproblem',SkinProblemControllerAPI::class);

// Route::post('/result', [SkincareRecomendationController::class, 'recommend'])->name('submit.form');
Route::post('/recommend-products', [SkincareRecomendationController::class, 'recommend'])->name('submit.form');
