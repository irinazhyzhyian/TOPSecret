<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Positions;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index() {
        $employee = Employee::with('positions')->get();
        $pos = Positions::all();
        return view('admin.employee')->with('employee', $employee)->with('pos', $pos);
    }

    public function store(Request $request) {
        $employee = new Employee();
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->description = $request->input('description');
        $employee->position_id = $request->input('position_id');


        $employee->save();
        return redirect('/employee')->with('status', "You saved data!");
    }

    public function edit(Request $request, $id) {
        $employee = Employee::with('positions')->findOrFail($id);
        $pos = Positions::all();
        return view('admin.employee-edit')->with('employee', $employee)->with('pos', $pos);
    }

    public function update(Request $request, $id) {
        $employee =Employee::find($id);
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->description = $request->input('description');
        $employee->position_id = $request->input('position_id');
        $employee->update();

        return redirect('/employee')->with('status', 'Your data is updated!');
    }

    public function delete(Request $request, $id){
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect('/employee')->with('status', 'Your data is deleted!');
    }
}
