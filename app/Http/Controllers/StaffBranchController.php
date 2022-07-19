<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffBranch;

class StaffBranchController extends Controller
{
    public function index()
    {
        // select * from
        $_staff_branch = StaffBranch::all();
        return view('soal4.tampilan' , compact('_staff_branch'));
    }
}
