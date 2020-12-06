<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Positions;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index() {
        $employee = Employee::with('positions')->get();
        $pos = Positions::all();
        return view('welcome')->with('employee', $employee)->with('pos', $pos);
    }

}
