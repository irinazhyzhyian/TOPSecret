<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\OrdersInfo;
use App\Models\Orders;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OrderInfoController extends Controller
{
    public function add() {
        $id = Auth::id();
        if($id){
            $info=OrdersInfo::where('user_id','=',$ordersinfo);
            return view('user.addinfo')->with('info', $info);
        }
        else{
            return view('user.addinfo');
        }

    }

    public function store(Request $request) {
        $ordersinfo = new OrdersInfo();
        $ordersinfo->order_time = date('y-m-d H:m:s');
        $ordersinfo->delivery_time = $request->input('delivery_time');
        $ordersinfo->address = $request->input('address');
        $ordersinfo->user_id = $request->input('user_id');
        $ordersinfo->customer_name = $request->input('customer_name');
        $ordersinfo->phone = $request->input('phone');

        $oid=$ordersinfo->save();
        echo $oid;

        //$id = Auth::user()->id;
        /*$order = DB::table('public.basket')
        ->select(DB::raw('public.basket.id, public.basket.item_id, item_count'))
        ->where('user_id', '=', $id)
        ->get();*/
        $order = session()->get('cart');

        foreach($order as $id => $o){
            $orders = new Orders();
            $orders->item_id = $o["id"];
            $orders->order_info_id = $ordersinfo->id;
            $orders->items_count = $o["quantity"];

            $orders->save();
        }
        return view('cart');
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
        $ordersinfo->user_id = $request->input('user_id');
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
