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
        $data = $request->all();
        #create or update your data here

        Log::info($data);


        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

}
