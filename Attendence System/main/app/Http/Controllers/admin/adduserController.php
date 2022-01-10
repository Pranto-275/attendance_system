<?php

namespace App\Http\Controllers\admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adduserController extends Controller
{


    public function __construct()
    {

        $this->middleware(['role:admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('admin.addusers');
    }


    public function viewstudent()
    {

        $user = User::where('reg_id', 'like', '%STU%')->get();

        return view('admin.viewstudents', compact('user'));
    }



    public function viewteacher()
    {

        $user = User::where('reg_id', 'like', '%TEA%')->get();

        return view('admin.viewteachers', compact('user'));
    }









    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->role_id == 'teacher') {
            $request->validate([
                'name' => 'required',
                'department' => 'required',
                'email' => 'required|email',
                'course' => 'required',
                'password' => 'required|max:12|min:8',

            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'department' => 'required',
                'email' => 'required|email',
                'semester' => 'required',
                'batch' => 'required',
                'password' => 'required|max:12|min:8',

            ]);
        }

        $user = new User();

        if ($request->role_id == 'teacher') {
            $reg_id = Helper::IDGenerator($user, 'reg_id', 4, 'TEA');
            $user->reg_id = $reg_id;
        } else {
            $reg_id = Helper::IDGenerator($user, 'reg_id', 4, 'STU');
            $user->reg_id = $reg_id;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->department = $request->department;
        $user->course = $request->course;
        $user->semester = $request->semester;
        $user->batch = $request->batch;
        $user->password =  Hash::make($request->password);
        $user->save();
        $user->attachRole($request->role_id);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.edituser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->department = $request->department;
        $user->course = $request->course;
        $user->semester = $request->semester;
        $user->batch = $request->batch;
        $user->password =  Hash::make($request->password);
        $user->save();

        if (!$request->course == null) {
            return redirect()->route('admin.viewteacher');
        } else {
            return redirect()->route('admin.viewstudent');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin.viewstudent');
    }
}
