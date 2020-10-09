<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuItemsController extends Controller
{
    public function index() {
        $menuitems = MenuItems::all();
        return view('admin.menuitems')->with('menuitems', $menuitems);
    }

    public function store(Request $request) {
        $menuitems = new MenuItems();
        $menuitems->name = $request->input('name');
        $menuitems->price = $request->input('price');
        $menuitems->description = $request->input('description');

        $menuitems->save();
        return redirect('\menuitems')->with('status', "Data added for Menu Items!");
    }

    public function edit(Request $request, $id) {
        $menuitems = MenuItems::findOrFail($id);
        return view('admin.menuitem-edit')->with('menuitems', $menuitems);
    }

    public function update(Request $request, $id) {
        $menuitems = MenuItems::find($id);
        $menuitems->name = $request->input('name');
        $menuitems->price = $request->input('price');
        $menuitems->description = $request->input('description');
        $menuitems->update();

        return redirect('/menuitems')->with('status', 'Your data is updated!');
    }

    public function delete(Request $request, $id){
        $menuitems = MenuItems::findOrFail($id);
        $menuitems->delete();

        return redirect('/menuitems')->with('status', 'Your data is deleted!');
    }
}
