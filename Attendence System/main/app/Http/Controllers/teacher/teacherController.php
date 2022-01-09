<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class teacherController extends Controller
{

    public function __construct()
    {

        $this->middleware(['role:teacher']);
    }



    public function dashboard()
    {
        return view('teacher.dashboard');
    }
}
