<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\OrdersInfo;
use App\Models\Orders;
use App\Models\MenuItems;
use App\Models\CustomCoffee;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function index() {
        $orders = Orders::with(['ordersinfo', 'menuitems'])->get();
        $ordersinfo = OrdersInfo::all();
        $items = MenuItems::all();
        $customcoffes = CustomCoffee::all();
        return view('admin.orders')->with('orders', $orders)->with('ordersinfo', $ordersinfo)->with('items', $items)->with('customcoffes', $customcoffes);
    }

    public function store(Request $request) {
        $orders = new Orders();
        $orders->item_id = $request->input('item_id');
        $orders->custom_id = $request->input('custom_id');
        $orders->order_info_id = $request->input('order_id');
        $orders->items_count = $request->input('items_count');

        $orders->save();
        return redirect('\orders')->with('status', "Data added!");
    }

    public function edit(Request $request, $id) {
        $orders = Orders::findOrFail($id);
        $ordersinfo = OrdersInfo::all();
        $items = MenuItems::all();
        $customcoffes = CustomCoffee::all();
        return view('admin.order-edit')->with('orders', $orders)->with('ordersinfo', $ordersinfo)->with('items', $items)->with('customcoffees', $customcoffes);
    }

    public function update(Request $request, $id) {
        $orders = Orders::find($id);
        $orders->item_id = $request->input('item_id');
        $orders->custom_id = $request->input('custom_id');
        $orders->order_info_id = $request->input('order_id');
        $orders->items_count = $request->input('items_count');
        
        $orders->update();

        return redirect('/orders')->with('status', 'Your data is updated!');
    }

    public function delete(Request $request, $id){
        $orders = Orders::findOrFail($id);
        $orders->delete();

        return redirect('/orders')->with('status', 'Your data is deleted!');
    }
}
