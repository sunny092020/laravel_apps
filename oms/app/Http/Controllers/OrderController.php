<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Department;

use Illuminate\Support\Facades\Log;

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

    public function update(Request $request)
    {
        $department_id = $request->input('department_id');
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $user_id = 1;



        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

}
