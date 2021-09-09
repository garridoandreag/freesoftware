<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('complaint')->group(function () {
    Route::get('/', [App\Http\Controllers\ComplaintController::class, 'index'])->name('complaint.index');
    Route::get('/create', [App\Http\Controllers\ComplaintController::class, 'create'])->name('complaint.create');
});


Route::prefix('directorate')->group(function () {
    Route::get('/create', [App\Http\Controllers\DirectorateController::class, 'create'])->name('directorate.create');
    Route::get('/image/{filename}', [App\Http\Controllers\DirectorateController::class, 'getImage'])->name('directorate.logo');
});

Route::prefix('user')->group(function () {
    Route::get('/config', [App\Http\Controllers\UserController::class, 'config'])->name('user.config');
    Route::post('/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::get('/image/{filename}', [App\Http\Controllers\UserController::class, 'getImage'])->name('user.image');
});

Route::prefix('branchoffice')->group(function () {
    Route::get('/get/{vendor_id}/{town_id}/{zone_val?}', [App\Http\Controllers\BranchofficeController::class, 'get'])->name('branchoffice.get');
    Route::get('/getZones/{vendor_id}/{town_id}', [App\Http\Controllers\BranchofficeController::class, 'getZones'])->name('branchoffice.getZones');
});

Route::prefix('town')->group(function () {
    Route::get('/get/{vendor_id}/{department_id}', [App\Http\Controllers\TownController::class, 'get'])->name('town.get');
});

Route::prefix('department')->group(function () {
    Route::get('/get/{id}', [App\Http\Controllers\DepartmentController::class, 'get'])->name('department.get');
});