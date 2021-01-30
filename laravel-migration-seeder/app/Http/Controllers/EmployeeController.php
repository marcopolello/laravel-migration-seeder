<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// necessario importare il modello employee
use App\Employee;

class EmployeeController extends Controller
{
  public function index(){
    $emps = Employee::all();
    // dd($emps);
    return view('pages.employees', compact('emps'));
  }
  public function show($id){
    // dd($id);
    $emp = Employee::findOrFail($id);
    return view('pages.employee', compact('emp'));
  }
}
