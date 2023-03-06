<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Office;
class OfficeController extends Controller
{
    public function index(){
        $offices = Office::orderBy('id')
        ->with('employee')
        ->get();

        return inertia('Office', [
            'offices' =>$offices
        ]);
    }

    public function offices(){
        return inertia('Office');
    }
}
