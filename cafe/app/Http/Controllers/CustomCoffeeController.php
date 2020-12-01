<?php

namespace App\Http\Controllers;

use App\Models\CustomCoffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomCoffeeController extends Controller
{
    public function index()
    {
        return view('custom_coffee.index');
    }

    public function store(Request $request)
    {
        CustomCoffee::insert([
            'name' => $request->get('name'),
            'user_id' => Auth::user()->id,
            'composition' => json_encode($request->get('composition')),
        ]);

        return back();
    }

    public function destroy(int $id)
    {
        CustomCoffee::find($id)->delete();

        return back();
    }
}
