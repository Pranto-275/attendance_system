<?php

use App\Http\Controllers\admin\adduserController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\student\reportController;
use App\Http\Controllers\student\studentController;
use App\Http\Controllers\teacher\teacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [HomeController::class, 'index'])->name('home');






Route::group(['middleware' => ['prevent-back-history']], function () {
    Route::get('/', function () {
        return view('auth.login');
    });

    Auth::routes();


    Route::resource('admin', adduserController::class);



    Route::get('/viewstudents', [adduserController::class, 'viewstudent'])->name('admin.viewstudent');
    Route::get('/viewteachers', [adduserController::class, 'viewteacher'])->name('admin.viewteacher');

    //student
    Route::resource('student', studentController::class);
    Route::get('/report', [reportController::class, 'showreport'])->name('student.report');

    //teacher
    Route::resource('teacher', teacherController::class);
    Route::get('/teachershowstudents', [teacherController::class, 'showstudents'])->name('teacher.showstudents');
});
