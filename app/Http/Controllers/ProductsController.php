<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
     
        return view('products.index')->with($data);
         
        
    }

    public function show($name)
    {

        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];
        return view('products.index',[
            'products' => $data[$name] ?? 'Product '. $name . ' does not exists'
        ]);
    }
}
