<?php 
use App\Http\Controllers\Api\BrandControllerAPI;
use Illuminate\Support\Facades\Route;

Route::apiResource('/posts', BrandControllerAPI::class);

