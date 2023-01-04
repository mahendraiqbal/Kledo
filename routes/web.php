<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\OvertimesController;
use App\Http\Controllers\SettingController;


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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/overtime-pays/calculate', function () {
    return view('layouts/overtime-pays');
})->middleware(['auth'])->name('overtime-pays');
Route::get('employees', [EmployeesController::class, 'create']);
Route::post('/employees', [EmployeesController::class, 'store']);
Route::get('/overtimes', [OvertimesController::class, 'create']);
Route::post('/overtimes', [OvertimesController::class, 'store']);
Route::get('/settings', [SettingController::class], 'create');
Route::patch('/settings', [SettingController::class, 'edit']);




require __DIR__.'/auth.php';
