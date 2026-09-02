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

        // همه آیتم‌های سبد خرید کاربر که هنوز سفارش نشدن
        $cartItems = carts::where('user_id', $user_id)
            ->where('order_id', null)
            ->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'سبد خرید خالی است'], 400);
        }

        $createdOrders = [];

        foreach ($cartItems as $cartItem) {
            $order_id = orders::insertGetId([
                'address_id' => isset($request->address) ? $request->address : null,
                'user_id' => $user_id,
                'product_id' => $cartItem->product_id,
                'order_status_id' => 1,
            ]);

            $order_code = "100" . $order_id;
            orders::where('id', $order_id)->update(['order_code' => $order_code]);

            $cartItem->order_id = $order_id;
            $cartItem->save();

            $createdOrders[] = [
                'order_id' => $order_id,
                'product_id' => $cartItem->product_id,
            ];
        }

        return response()->json($createdOrders);
    }
}
