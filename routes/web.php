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
    return view('complaint.search');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('complaint')->group(function () {
    Route::get('/', [App\Http\Controllers\ComplaintController::class, 'index'])->name('complaint.index');
    Route::get('/create', [App\Http\Controllers\ComplaintController::class, 'create'])->name('complaint.create');
    Route::post('/store', [App\Http\Controllers\ComplaintController::class, 'store'])->name('complaint.store');
    Route::get('/review/{id}', [App\Http\Controllers\ComplaintController::class, 'review'])->name('complaint.review');
    Route::post('/reviewUpdate', [App\Http\Controllers\ComplaintController::class, 'reviewUpdate'])->name('complaint.reviewUpdate');
    Route::post('/update', [App\Http\Controllers\ComplaintController::class, 'update'])->name('complaint.update');
    Route::get('/search', [App\Http\Controllers\ComplaintController::class, 'search'])->name('complaint.search');
    Route::post('/show', [App\Http\Controllers\ComplaintController::class, 'show'])->name('complaint.show');
    Route::get('/detail/{id}', [App\Http\Controllers\ComplaintController::class, 'detail'])->name('complaint.detail');

    Route::post('/status', [App\Http\Controllers\ComplaintController::class, 'status'])->name('complaint.status');
});


Route::prefix('directorate')->group(function () {
    Route::get('/create', [App\Http\Controllers\DirectorateController::class, 'create'])->name('directorate.create');
    Route::get('/image/{filename}', [App\Http\Controllers\DirectorateController::class, 'getImage'])->name('directorate.logo');
});

Route::prefix('user')->group(function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.register');
    Route::get('/detail', [App\Http\Controllers\UserController::class, 'detail'])->name('user.detail');
    Route::get('/config', [App\Http\Controllers\UserController::class, 'config'])->name('user.config');
    Route::post('/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::get('/image/{filename}', [App\Http\Controllers\UserController::class, 'getImage'])->name('user.image');
});

Route::prefix('vendor')->group(function () {
    Route::get('/', [App\Http\Controllers\VendorController::class, 'index'])->name('vendor.index');
    Route::get('/create', [App\Http\Controllers\VendorController::class, 'create'])->name('vendor.create');
    Route::post('/store', [App\Http\Controllers\VendorController::class, 'store'])->name('vendor.store');
    Route::get('detail/{id}', [App\Http\Controllers\VendorController::class, 'detail'])->name('vendor.detail');
    Route::get('edit/{id}', [App\Http\Controllers\VendorController::class, 'edit'])->name('vendor.edit');
    Route::post('/update', [App\Http\Controllers\VendorController::class, 'update'])->name('vendor.update'); 
});

Route::prefix('branchoffice')->group(function () {
    Route::get('/', [App\Http\Controllers\BranchofficeController::class, 'index'])->name('branchoffice.index');
    Route::get('/create', [App\Http\Controllers\BranchofficeController::class, 'create'])->name('branchoffice.create');
    Route::post('/store', [App\Http\Controllers\BranchofficeController::class, 'store'])->name('branchoffice.store');
    Route::get('/edit/{id}', [App\Http\Controllers\BranchofficeController::class, 'edit'])->name('branchoffice.edit');
    Route::get('/detail/{id}', [App\Http\Controllers\BranchofficeController::class, 'detail'])->name('branchoffice.detail');
    Route::post('/update', [App\Http\Controllers\BranchofficeController::class, 'update'])->name('branchoffice.update');
    Route::get('/get/{vendor_id}/{town_id}/{zone_val?}', [App\Http\Controllers\BranchofficeController::class, 'get'])->name('branchoffice.get');
    Route::get('/getZones/{vendor_id}/{town_id}', [App\Http\Controllers\BranchofficeController::class, 'getZones'])->name('branchoffice.getZones');
});

Route::prefix('town')->group(function () {
    Route::get('/get/{department_id}/{vendor_id?}', [App\Http\Controllers\TownController::class, 'get'])->name('town.get');
});

Route::prefix('department')->group(function () {
    Route::get('/get/{id}', [App\Http\Controllers\DepartmentController::class, 'get'])->name('department.get');
});

Route::prefix('stadistic')->group(function () {
    Route::get('/chart1', [App\Http\Controllers\StadisticController::class, 'chart1'])->name('stadistic.chart1');
    Route::get('/chart2', [App\Http\Controllers\StadisticController::class, 'chart2'])->name('stadistic.chart2');
    Route::get('/chart3', [App\Http\Controllers\StadisticController::class, 'chart3'])->name('stadistic.chart3');
    Route::get('/getComplaints/{vendor_id?}', [App\Http\Controllers\StadisticController::class, 'getComplaints'])->name('stadistic.getComplaints');
    Route::get('/getComplaintsByRegion/{vendor_id?}', [App\Http\Controllers\StadisticController::class, 'getComplaintsByRegion'])->name('stadistic.getComplaintsByRegion');
    Route::get('/getComplaintsByCategory/{vendor_id?}', [App\Http\Controllers\StadisticController::class, 'getComplaintsByCategory'])->name('stadistic.getComplaintsByCategory');
});

Route::prefix('category')->group(function () {
    Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('detail/{id}', [App\Http\Controllers\CategoryController::class, 'detail'])->name('category.detail');
    Route::get('edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update'); 
});