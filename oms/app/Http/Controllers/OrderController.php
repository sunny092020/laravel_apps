<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Department;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

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

        DB::transaction(function() use($department_id, $product_id, $quantity, $user_id) {
            $now = Carbon::now();
            $start_of_day = $now->copy()->startOfDay();
            $end_of_day = $now->copy()->endOfDay();
            $today_order = Order::
                where('ordered_at', '>=', $start_of_day)->
                where('ordered_at', '<=', $end_of_day)->first();

            if(!$today_order) {
                Log::debug("here create new");
    
                $order = Order::create([
                    'ordered_at' => $now,
                    'ordered_from_department_id' => $department_id
                ]);
                $order_id = $order->save();
            } else {
                $order_id = $today_order->id;
            }
    
            OrderDetail::updateOrCreate(
                ['order_id' => $order_id, 'product_id' => $product_id],
                ['quantity' => $quantity, 'ordered_user_id' => $user_id]
            );    
        });
                
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

}
