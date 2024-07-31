<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getall()
    {
        try{
            $Category = Category::all();

        }catch(\Exception $e)
        {
            return response()->json('error');
        }
        return response()->json(['category'=>$Category]);
    }
    public function add(Request $request)
    {
        Category::insert([
            'name'=>$request->get('name')
        ]);
    }
}
