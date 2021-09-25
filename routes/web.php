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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\ComplaintController::class, 'search'])->name('home');

Route::prefix('complaint')->group(function () {
    Route::get('/', [App\Http\Controllers\ComplaintController::class, 'index'])->name('complaint.index')->middleware('auth');
    Route::get('/create', [App\Http\Controllers\ComplaintController::class, 'create'])->name('complaint.create');
    Route::post('/store', [App\Http\Controllers\ComplaintController::class, 'store'])->name('complaint.store');
    Route::get('/review/{id}', [App\Http\Controllers\ComplaintController::class, 'review'])->name('complaint.review')->middleware('auth');
    Route::post('/reviewUpdate', [App\Http\Controllers\ComplaintController::class, 'reviewUpdate'])->name('complaint.reviewUpdate')->middleware('auth');
    Route::post('/update', [App\Http\Controllers\ComplaintController::class, 'update'])->name('complaint.update')->middleware('auth');
    Route::get('/search', [App\Http\Controllers\ComplaintController::class, 'search'])->name('complaint.search');
    Route::post('/show', [App\Http\Controllers\ComplaintController::class, 'show'])->name('complaint.show');
    Route::get('/showp/{id}', [App\Http\Controllers\ComplaintController::class, 'showprint'])->name('complaint.showprint');
    Route::get('/detail/{id}', [App\Http\Controllers\ComplaintController::class, 'detail'])->name('complaint.detail')->middleware('auth');
});


Route::prefix('directorate')->group(function () {
    Route::get('/create', [App\Http\Controllers\DirectorateController::class, 'create'])->name('directorate.create')->middleware('auth');
    Route::get('/image/{filename}', [App\Http\Controllers\DirectorateController::class, 'getImage'])->name('directorate.logo');
});

Route::prefix('user')->group(function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user.index')->middleware('auth','admin');
    Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.register')->middleware('auth','admin');
    Route::get('/detail/{id}', [App\Http\Controllers\UserController::class, 'detail'])->name('user.detail')->middleware('auth','admin');
    Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit')->middleware('auth','admin');
    Route::get('/config', [App\Http\Controllers\UserController::class, 'config'])->name('user.config')->middleware('auth','admin');
    Route::post('/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update')->middleware('auth');
    Route::post('/updateByAdmin', [App\Http\Controllers\UserController::class, 'updateByAdmin'])->name('user.updateByAdmin')->middleware('auth');
    Route::get('/image/{filename}', [App\Http\Controllers\UserController::class, 'getImage'])->name('user.image')->middleware('auth','admin');
    Route::get('/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy')->middleware('auth','admin');
});

Route::prefix('vendor')->group(function () {
    Route::get('/', [App\Http\Controllers\VendorController::class, 'index'])->name('vendor.index');
    Route::get('/create', [App\Http\Controllers\VendorController::class, 'create'])->name('vendor.create')->middleware('auth');
    Route::post('/store', [App\Http\Controllers\VendorController::class, 'store'])->name('vendor.store')->middleware('auth');
    Route::get('detail/{id}', [App\Http\Controllers\VendorController::class, 'detail'])->name('vendor.detail');
    Route::get('edit/{id}', [App\Http\Controllers\VendorController::class, 'edit'])->name('vendor.edit')->middleware('auth');
    Route::post('/update', [App\Http\Controllers\VendorController::class, 'update'])->name('vendor.update')->middleware('auth');
});

Route::prefix('branchoffice')->group(function () {
    Route::get('/', [App\Http\Controllers\BranchofficeController::class, 'index'])->name('branchoffice.index');
    Route::get('/create', [App\Http\Controllers\BranchofficeController::class, 'create'])->name('branchoffice.create')->middleware('auth');
    Route::post('/store', [App\Http\Controllers\BranchofficeController::class, 'store'])->name('branchoffice.store')->middleware('auth');
    Route::get('/edit/{id}', [App\Http\Controllers\BranchofficeController::class, 'edit'])->name('branchoffice.edit')->middleware('auth');
    Route::get('/detail/{id}', [App\Http\Controllers\BranchofficeController::class, 'detail'])->name('branchoffice.detail');
    Route::post('/update', [App\Http\Controllers\BranchofficeController::class, 'update'])->name('branchoffice.update')->middleware('auth');
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
    Route::get('/chart1', [App\Http\Controllers\StadisticController::class, 'chart1'])->name('stadistic.chart1')->middleware('auth');
    Route::get('/chart2', [App\Http\Controllers\StadisticController::class, 'chart2'])->name('stadistic.chart2')->middleware('auth');
    Route::get('/chart3', [App\Http\Controllers\StadisticController::class, 'chart3'])->name('stadistic.chart3')->middleware('auth');
    Route::get('/chart4', [App\Http\Controllers\StadisticController::class, 'chart4'])->name('stadistic.chart4')->middleware('auth');
    Route::get('/getComplaints/{vendor_id?}', [App\Http\Controllers\StadisticController::class, 'getComplaints'])->name('stadistic.getComplaints')->middleware('auth');
    Route::get('/getComplaintsByRegion/{vendor_id?}', [App\Http\Controllers\StadisticController::class, 'getComplaintsByRegion'])->name('stadistic.getComplaintsByRegion')->middleware('auth');
    Route::get('/getComplaintsByCategory/{vendor_id?}', [App\Http\Controllers\StadisticController::class, 'getComplaintsByCategory'])->name('stadistic.getComplaintsByCategory')->middleware('auth');
});

Route::prefix('report')->group(function () {
    Route::get('/',[App\Http\Controllers\ReportController::class,'index'])->name('report.index')->middleware('auth');
    Route::get('/complaint/{id}',[App\Http\Controllers\ReportController::class,'getComplaintPDF'])->name('report.complaint');
    Route::post('/complaintsByDate',[App\Http\Controllers\ReportController::class,'getComplaintsByDatePDF'])->name('report.complaintsByDate')->middleware('auth');
    Route::post('/complaintsByDateRegion',[App\Http\Controllers\ReportController::class,'getComplaintsByDateRegionPDF'])->name('report.complaintsByDateRegion')->middleware('auth');
    Route::post('/complaintsByDateDepartment',[App\Http\Controllers\ReportController::class,'getComplaintsByDateDepartmentPDF'])->name('report.complaintsByDateDepartment')->middleware('auth');
    Route::post('/complaintsByDateCategory',[App\Http\Controllers\ReportController::class,'getComplaintsByDateCategoryPDF'])->name('report.complaintsByDateCategory')->middleware('auth');
    Route::post('/complaintsByDateRegionAndVendor',[App\Http\Controllers\ReportController::class,'getComplaintsByDateRegionAndVendorPDF'])->name('report.complaintsByDateRegionAndVendor')->middleware('auth');
    
});


Route::prefix('category')->group(function () {
    Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index')->middleware('auth');
    Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create')->middleware('auth');
    Route::post('/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store')->middleware('auth');
    Route::get('detail/{id}', [App\Http\Controllers\CategoryController::class, 'detail'])->name('category.detail')->middleware('auth');
    Route::get('edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit')->middleware('auth');
    Route::post('/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update')->middleware('auth');
});