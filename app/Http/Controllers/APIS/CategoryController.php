<?php

namespace App\Http\Controllers\APIS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getAll(){
        $data = Category::all();

        return response()->json(['message'=> 'Get All Categories Successfully' ,'data' => $data, 'status' => 200]);

    }
}
