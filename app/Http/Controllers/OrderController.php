<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function orders(Request $request) {
        $orders = Order::orderBy("id","desc")->get();
        return view("orders", ['orders' => $orders]);
    }
}
