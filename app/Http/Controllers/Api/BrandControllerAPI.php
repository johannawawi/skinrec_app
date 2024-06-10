<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $brands = Brand::all();
        return response()->json($brands);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand_name' => 'required|string|max:255',
            'id_brand' => 'required|string|min:6|unique:brands,id_brand',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $brand = Brand::create([
            'name' => $request->input('brand_name'),
            'id_brand' => $request->input('id_brand'),
        ]);

        return response()->json($brand, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id_brand
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $id_brand)
    {
        $brand = Brand::where('id_brand', $id_brand)->first();

        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404);
        }

        return response()->json($brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id_brand
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, string $id_brand)
    {
        $validator = Validator::make($request->all(), [
            'brand_name' => 'string|max:255',
            'id_brand' => 'string|min:6|unique:brands,id_brand,' . $id_brand,
            'password' => 'string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $brand = Brand::where('id_brand', $id_brand)->first();

        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404);
        }

        $brand->name = $request->input('brand_name', $brand->name);
        $brand->id_brand = $request->input('id_brand', $brand->id_brand);

        if ($request->has('password')) {
            $brand->password = bcrypt($request->input('password'));
        }

        $brand->save();

        return response()->json($brand);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id_brand
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(string $id_brand)
    {
        $brand = Brand::where('id_brand', $id_brand)->first();

        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404);
        }

        $brand->delete();

        return response()->json(['message' => 'Brand deleted']);
    }
}