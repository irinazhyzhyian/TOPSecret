<?php

namespace App\Http\Controllers;

use App\Models\CustomCoffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OrdersInfo;
use App\Models\Orders;

class CustomCoffeeController extends Controller
{
    public function index()
    {
        return view('custom_coffee.index');
    }

    public function store(Request $request)
    {
        $customcoffee = new CustomCoffee();
    
        $customcoffee->name = $request->get('name');
        if(Auth::user()!=null)
            $customcoffee->user_id = Auth::user()->id;
        $customcoffee->composition = json_encode($request->get('composition'));
        $customcoffee->save();

        $ordersinfo = new OrdersInfo();
        $ordersinfo->order_time = date('y-m-d H:m:s');
        $ordersinfo->delivery_time = $request->input('delivery_time');
        $ordersinfo->address = $request->input('address');
        $ordersinfo->user_id = $request->input('user_id');
        $ordersinfo->customer_name = $request->input('customer_name');
        $ordersinfo->phone = $request->input('phone');
        $ordersinfo->save();

        $orders = new Orders();
        $orders->custom_id = $customcoffee->id;
        $orders->order_info_id = $ordersinfo->id;
        $orders->items_count = $request->input("quantity");
        $orders->save();
        return back();
    }

    public function destroy(int $id)
    {
        CustomCoffee::find($id)->delete();

        return back();
    }
}
