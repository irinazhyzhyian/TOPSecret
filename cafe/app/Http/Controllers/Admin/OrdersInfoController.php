<?php

namespace App\Http\Controllers\Admin;

use App\Models\OrdersInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersInfoController extends Controller
{
    public function index() {
        $ordersinfo = OrdersInfo::all();
        return view('admin.ordersinfo')->with('ordersinfo', $ordersinfo);
    }

    public function store(Request $request) {
        $ordersinfo = new OrdersInfo();
        $ordersinfo->order_time = $request->input('order_time');
        $ordersinfo->delivery_time = $request->input('delivery_time');
        $ordersinfo->address = $request->input('address');
        $ordersinfo->customer_name = $request->input('customer_name');
        $ordersinfo->phone = $request->input('phone');

        $ordersinfo->save();
        return redirect('\ordersinfo')->with('status', "Data added for Menu Items!");
    }

    public function edit(Request $request, $id) {
        $ordersinfo = OrdersInfo::findOrFail($id);
        return view('admin.ordersinfo-edit')->with('ordersinfo', $ordersinfo);
    }

    public function update(Request $request, $id) {
        $ordersinfo = OrdersInfo::find($id);
        $ordersinfo->order_time = $request->input('order_time');
        $ordersinfo->delivery_time = $request->input('delivery_time');
        $ordersinfo->address = $request->input('address');
        $ordersinfo->customer_name = $request->input('customer_name');
        $ordersinfo->phone = $request->input('phone');

        $ordersinfo->update();

        return redirect('/ordersinfo')->with('status', 'Your data is updated!');
    }

    public function delete(Request $request, $id){
        $ordersinfo = OrdersInfo::findOrFail($id);
        $ordersinfo->delete();

        return redirect('/ordersinfo')->with('status', 'Your data is deleted!');
    }
}
