<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ingradients;
use App\Models\Products;
use App\Models\MenuItems;
use App\Models\CustomCoffee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IngradientsController extends Controller
{
    public function index() {
        $ingradients = Ingradients::with(['products', 'menuitems'])->get();
        $products = Products::all();
        $items = MenuItems::all();
        return view('admin.ingradients')->with('ingradients', $ingradients)->with('products', $products)->with('items', $items);
    }

    public function store(Request $request) {
        $ingradients = new Ingradients();
        $ingradients->product_id = $request->input('product_id');
        $ingradients->product_count = $request->input('product_count');
        $ingradients->item_id = $request->input('item_id');

        $ingradients->save();
        
        return redirect('\ingradients')->with('status', "Data added for Menu Items!");
    }

    public function edit(Request $request, $id) {
        $ingradients = Ingradients::findOrFail($id);
        $products = Products::all();
        $items = MenuItems::all();
        return view('admin.ingradient-edit')->with('ingradients', $ingradients)->with('products', $products)->with('items', $items);
    }

    public function update(Request $request, $id) {
        $ingradients = Ingradients::find($id);
        $ingradients->product_id = $request->input('product_id');
        $ingradients->product_count = $request->input('product_count');
        $ingradients->item_id = $request->input('item_id');
    
        $ingradients->update();
    
        return redirect('\ingradients')->with('status', "Data updated!");
        
    }

    public function delete(Request $request, $id){
        $ingradients = Ingradients::findOrFail($id);
        $ingradients->delete();

        return redirect('/ingradients')->with('status', 'Your data is deleted!');
    }
}
