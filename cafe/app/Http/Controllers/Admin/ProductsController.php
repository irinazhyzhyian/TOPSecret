<?php

namespace App\Http\Controllers\Admin;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index() {
        $products = Products::all();
        return view('admin.products')->with('products', $products);
    }

    public function store(Request $request) {
        $products = new Products();
        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->caloric_content = $request->input('caloric_content');

        $products->save();
        return redirect('\products')->with('status', "Data added for Products!");
    }

    public function edit($id) {
        $products = Products::findOrFail($id);
        return view('admin.product-edit')->with('products', $products);
    }

    public function update(Request $request, $id) {
        $products = Products::find($id);
        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->caloric_content = $request->input('caloric_content');
        $products->update();

        return redirect('/products')->with('status', 'Your data is updated!');
    }

    public function delete($id){
        $products = Products::findOrFail($id);
        $products->delete();

        return redirect('/products')->with('status', 'Your data is deleted!');
    }
}
