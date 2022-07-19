<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

class StaffController extends Controller
{
    public function index()
    {
        // select * from
        $_staff = staff::all();
        return view('staff.staff' , compact('_staff'));
    }
}
