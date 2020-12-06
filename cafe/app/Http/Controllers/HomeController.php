<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Ingradients;
use App\Models\Products;
use App\Models\MenuItems;
use App\Models\CustomCoffee;
use App\Models\Orders;
use App\Models\OrdersInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
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
        /*$coffee =  DB::table('products')
        ->select(DB::raw('customcoffee.name as name, customcoffee.id as id, Sum(product_count*products.price) as price'))
        ->join('ingradients', 'products.id', '=', 'ingradients.product_id')
        ->join('customcoffee', 'customcoffee.id', '=', 'ingradients.custom_id')
        ->where('user_id', '=',Auth::user()->id)
        ->groupby('customcoffee.name', 'customcoffee.id')
        ->get();*/
        $coffee = DB::table('customcoffee')->where('user_id', Auth::user()->id)->get();
        return view('home')->with('coffee', $coffee);
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
        $custom  = CustomCoffee::findOrFail($id);
        //$ingradients = Ingradients::where('custom_id', '=', $id)->delete();
        //$ordersinfo = OrdersInfo::where('user_id', '=', $id)->get();
        $orders = Orders::where('custom_id', '=', $custom->id)->delete();

        //$ordersinfo->delete();
        //$orders->delete();
        $custom->delete();

        return redirect('/home')->with('status', 'Your data is deleted!');
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
