<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::orderby('first_name')->get();

        sleep(2);

        return inertia("Employee", [
            'employees' =>$employees
        ]);
    }

    public function employees(){
        return inertia("Employee");
    }


}
