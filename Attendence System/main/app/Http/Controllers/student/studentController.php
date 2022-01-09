<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function __construct()
    {

        $this->middleware(['role:student']);
    }

    public function dashboard()
    {
        return view('student.dashboard');
    }
}
