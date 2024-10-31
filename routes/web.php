<?php

use App\Http\Controllers\welcomeController;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', [welcomeController::class, 'index']);

Route::get('/home', function () {
    return view('home');
});


Route::get('/fetchdata', function () {
    $users = DB::select('select * from users');
    // dd($users);
    $users1 = DB::table('users')->select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
    // dd($users1);
    // using eloquent
    $students = Student::all();
    // dd($students);
    // foreach ($students as $student) {
    //     echo $student->name . '<br>';
    // }
    $students1 = DB::table('users')->select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
    dd($students1);
});
