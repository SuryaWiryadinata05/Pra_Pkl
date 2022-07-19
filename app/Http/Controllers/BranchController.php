<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    public function index(){

        // select * from
        $_branch = Branch::all();
        return view('soal4.tampilan' , compact('_branch'));
    }
}
