<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
    $jumlahpegawai = Employee::count();
    return view('welcome', compact('jumlahpegawai'));
});

Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai');
Route::get('/tambahpegawai', [EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata', [EmployeeController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkantdata/{id}', [EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');

// export PDF
Route::get('/exportpdf', [EmployeeController::class, 'exportpdf'])->name('exportpdf');
// export Excel
Route::get('/exportexcel', [EmployeeController::class, 'exportexcel'])->name('exportexcel');
// import Excel
Route::post('/importexcel', [EmployeeController::class, 'importexcel'])->name('importexcel');