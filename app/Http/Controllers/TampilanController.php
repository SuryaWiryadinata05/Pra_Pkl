<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffBranch;
use App\Models\staff;
use App\Models\Branch;

class TampilanController extends Controller
{
    public function index()
    {
        // select * from
        $_staff_branch = StaffBranch::all();
        $_staff = staff::all();
        $_branch = Branch::all();
        return view('soal4.tampilan' , compact('_staff_branch','_staff','_branch'));
    }
}
