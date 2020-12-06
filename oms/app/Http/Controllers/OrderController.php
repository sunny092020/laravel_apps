<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Department;

class OrderController extends Controller
{
    //
    public function new()
    {        
        return view('order.new', [
            'products' => Product::all(),
            'departments' => Department::all(['id', 'name'])
        ]);
    }
}
