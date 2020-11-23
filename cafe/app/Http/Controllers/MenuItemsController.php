<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\MenuItems;


class MenuItemsController extends Controller
{
    public function index()
    {
        $products = MenuItems::all();

        return view('menu', compact('products'));
    }
    public function cart()
    {
        $user = null;
        if(Auth::user()){
            $user = Auth::user();
        }
        return view('cart', compact('user'));
    }
    public function addToCart($id)
    {
        $product = MenuItems::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // якщо корзина порожня, то це перший продукт там
        if(!$cart) {
            $cart = [
                    $id => [
                        "id" => $product->id,
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // якщо корзина не порожня і там є цей продукт, то додаємо кількість +1
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // якщо продукту нема в корзині, то додаємо його з кількістю 1
        $cart[$id] = [
            "id" => $product->id,
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
