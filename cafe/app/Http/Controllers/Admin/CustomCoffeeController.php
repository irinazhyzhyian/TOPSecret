<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\CustomCoffee;
use App\User;
use App\Http\Controllers\Controller;

class CustomCoffeeController extends Controller
{
    public function index() {
        $customcoffee = CustomCoffee::with('users')->get();
        $user = User::all();
        return view('admin.customcoffee')->with('customcoffee', $customcoffee)->with('user', $user);
    }

    public function store(Request $request) {
        $customcoffee = new CustomCoffee();
        $customcoffee->name = $request->input('name');
        $customcoffee->user_id = $request->input('user_id');

        $customcoffee->save();
        return redirect('/customcoffee')->with('status', "You saved data!");
    }

    public function edit(Request $request, $id) {
        $customcoffee = CustomCoffee::with('users')->findOrFail($id);
        $user = Users::all();
        return view('admin.customcoffee-edit')->with('customcoffee', $customcoffee)->with('user', $user);
    }

    public function update(Request $request, $id) {
        $customcoffee = CustomCoffee::find($id);
        $customcoffee->name = $request->input('name');
        $customcoffee->user_id = $request->input('user_id');
        $customcoffee->update();

        return redirect('/customcoffee')->with('status', 'Your data is updated!');
    }

    public function delete(Request $request, $id){
        $customcoffee = CustomCoffee::findOrFail($id);
        $customcoffee->delete();

        return redirect('/customcoffee')->with('status', 'Your data is deleted!');
    }
}
