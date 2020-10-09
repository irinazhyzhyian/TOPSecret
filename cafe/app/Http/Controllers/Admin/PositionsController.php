<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Positions;
use App\Http\Controllers\Controller;

class PositionsController extends Controller
{
    public function index() {
        $positions = Positions::all();
        return view('admin.positions')->with('positions', $positions);
    }

    public function store(Request $request) {
        $p = new Positions();
        $p->position = $request->input('position');

        $p->save();
        return redirect('\positions')->with('status', "Data added for Positions!");
    }

    public function edit(Request $request, $id) {
        $positions = Positions::findOrFail($id);
        return view('admin.position-edit')->with('positions', $positions);
    }

    public function update(Request $request, $id) {
        $positions = Positions::find($id);
        $positions->position = $request->input('position');
        $positions->update();

        return redirect('/positions')->with('status', 'Your data is updated!');
    }

    public function delete(Request $request, $id){
        $positions = Positions::findOrFail($id);
        $positions->delete();

        return redirect('/positions')->with('status', 'Your data is deleted!');
    }
}
