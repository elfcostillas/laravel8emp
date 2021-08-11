<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
    public function index()
    {
        $product = Product::all();

        return response()->json([$product,'token'=>csrf_token()]);
    }

    public function store(Request $request,Product $product)
    {
        
        //$isValid = $request->validate([
        //      'description' => 'required|unique:products'
        // ]);

        // if(is_object($isValid))
        // {
        //     //return response()->json([$isValid->errors()]);
        //     return response()->json(['errors' => $isValid->messages(),'e'=>$errors->all()],500);
        // }

        $validator = Validator::make($request->all(), [
            'description' => 'required|unique:products|max:255'
        
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()],422);
        }

        //$product->create($request->all());
    }
}
