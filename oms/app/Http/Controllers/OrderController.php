<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    //
    public function new()
    {
        foreach (Product::all() as $product) {
            echo $product->name;
        }
        
        return view('order.new', ['products' => Product::all()]);
    }

}
