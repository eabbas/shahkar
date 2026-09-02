<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\orders;
use App\Models\carts;
class OrdersController extends Controller
{
    public function store(Request $request)
    {

        $user_id = Auth::id();
        if (isset($request->user_id)) {
            $user_id = $request->user_id;
        }
        $order_id = orders::insertGetId([
            'address_id' => isset($request->address) ? $request->address : null,
            'user_id' => $user_id,
            'product_id' => $request->product_id,
            'order_status_id' => 1,
        ]);
        $order_code = "100" . $order_id;
        orders::where('id', $order_id)->update(['order_code' => $order_code]);

        $cart = carts::where('product_id' , $request->product_id)->where('user_id' , $user_id)->where('order_id' , null)->get();
        foreach ($cart as $cartItem) {
            $findCart = carts::find($cartItem->id);
            $findCart->order_id = $order_id;
            $findCart->save();
        }
        return response()->json($cart);
    }
}
