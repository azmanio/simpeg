<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get("/logout", [AuthController::class, 'logout'])->name('logout');


Route::prefix('/admin/')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('pages.admin.dashboard');
    })->name('dashboard');

    Route::resource('user', UserController::class);
    Route::get('user/{user}/status', [UserController::class, 'status'])->name('user.status');

    Route::resource('employees', EmployeeController::class);
    Route::get('employees/{employee}/status', [EmployeeController::class, 'status'])->name('employees.status');

    Route::resource('departments', DepartmentController::class);
});