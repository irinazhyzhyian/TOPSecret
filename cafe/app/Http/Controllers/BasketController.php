<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Orders;
use App\Models\Basket;
use App\Models\OrdersInfo;
use App\Models\MenuItems;
use App\Models\CustomCoffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BasketController extends Controller
{ /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $id = Auth::user()->id;
        $order = DB::table('public.menuitems')
        ->select(DB::raw('public.basket.id, public.menuitems.name, description, price, item_count, users.name as usname, users.phone'))
        ->join('public.basket', 'public.menuitems.id', '=', 'public.basket.item_id')
        ->join('users', 'public.basket.user_id', '=', 'users.id')
        ->where('user_id', '=', $id)
        ->get();
        return view('user.basket')->with('order', $order)->with('user', Auth::user());
    }

    public function pluscount(Request $request, $id) {
        $order = Basket::findOrFail($id);
        $order->item_count++;
        $order->update();
    
        return redirect()->back();
    }

    public function minuscount(Request $request, $id) {
        $order = Basket::findOrFail($id);
        $order->item_count--;
        $order->update();
    
        return redirect()->back();
    }

    public function createorder() {
        $id = Auth::id();
        $order = DB::table('public.menuitems')
        ->select(DB::raw('public.basket.id, name, description, price, item_count'))
        ->join('public.basket', 'public.menuitems.id', '=', 'public.basket.item_id')
        ->where('user_id', '=', $id)
        ->get();

        foreach($order as $o){
            $orders = new Orders();
            $orders->item_id = $o->item_id;
            $orders->order_info_id = $request->input('order_id');
            $orders->items_count = $o->item_count;

        $orders->save();
        }
    
        return redirect()->back();
    }



    public function edit(Request $request, $id) {
        $recept = DB::table('products')
        ->select(DB::raw('ingradients.id, products.id as pid, products.name, product_count'))
        ->join('ingradients', 'products.id', '=', 'ingradients.product_id')
        ->join('customcoffee', 'customcoffee.id', '=', 'ingradients.custom_id')
        ->where('customcoffee.id', '=', $id)
        ->get();
        $products = Products::all();
        return view('user.customcoffee-edit')->with('recept', $recept)->with('products', $products)->with('custId', $id);
    }

    public function update(Request $request, $id) {
        $ingradients = Ingradients::find($id);
        $ingradients->product_id = $request->input('product_id');
        $ingradients->product_count = $request->input('product_count');
    
        $ingradients->update();
    
        return redirect()->back();
        
    }

    public function delete(Request $request, $id){
        $custom  = Basket::findOrFail($id);
        
        $custom->delete();

        return redirect('/cart')->with('status', 'Your data is deleted!');
    }

    public function addingradient(Request $request, $id) {
        $ingradients = new Ingradients();
        $ingradients->product_id = $request->input('product_id');
        $ingradients->product_count = $request->input('product_count');
        $ingradients->custom_id = $id;

        $ingradients->save();

        return redirect()->back();
    }

    public function dellingradient(Request $request, $id) {
        $id_i = $request->input('hid');
        $ingradients = Ingradients::find($id);
        $ingradients->delete();

        return redirect()->back();
    }
}
