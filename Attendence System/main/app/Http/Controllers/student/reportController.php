<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reportController extends Controller
{
    public function showreport()
    {



        $data = Attendance::with('user')->where('user_id', Auth::user()->id)->get();




        return view('student.student_report', compact('data'));
    }
}
