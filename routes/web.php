<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\EmployeeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-employee'            ,[EmployeeController::class,'addEmpShow']);
Route::post('/add-employee-post'      ,[EmployeeController::class,'addEmployee']);
Route::get('/view-employee'           ,[EmployeeController::class,'allEmployee'])->name('allEmp');
Route::get('/edit-employee/{Id}'      ,[EmployeeController::class,'editEmployee']);
Route::post('/update-employee/{Id}'   ,[EmployeeController::class,'updateEmployee']);
Route::get('/del-employee/{Id}'       ,[EmployeeController::class,'deleteEmployee']);