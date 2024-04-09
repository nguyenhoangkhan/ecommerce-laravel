<?php

namespace App\Http\Controllers\APIS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAll(Request $request){
        $data = [];

        $search = str_replace(' ', '-', strtolower($request->name));


        if($search){
            $data = Product::where('title', 'LIKE', '%'.$search.'%')->orderBy('id', 'DESC')->paginate(20);
        }else{
            $data = Product::all();
        }



        return response()->json(['message'=> 'Get All Products Successfully' ,'data' => $data, 'status' => 200]);
    }

    public function getByCategory(string $category_id){
        $data = Product::where('category_id', $category_id)->get();

        return response()->json(['message'=> 'Get Products by category Successfully' ,'data' => $data, 'status' => 200]);
    }
}
