<?php

use App\Http\Controllers\Studentcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'student'],function(){
    Route::get('/all', [Studentcontroller::class,'index'])->name('student_index');
    Route::get('/create', [Studentcontroller::class,'create'])->name('student_create');
    Route::post('/store',[Studentcontroller::class,'store'])->name('student_store');
    Route::get('/{student_id}', [StudentController::class, 'edit'])->name('student_edit');
    Route::put('/{student_id}',[Studentcontroller::class, 'update'])->name('student_update');
    Route::get('/delete/{student_id}',[Studentcontroller::class, 'delete'])->name('student_delete');

});

