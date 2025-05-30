<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\DetailBarangController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupplierController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\dashboard;

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('login', [AuthController::class, 'loginView'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/categories/store', [CategoryController::class, 'store']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

Route::resource('suppliers', SupplierController::class);
Route::resource('items', ItemController::class);
Route::resource('detail_barang', DetailBarangController::class);


Route::resource('/transactions', TransaksiController::class);
Route::resource('/reports', ReportController::class,);


// Route::resource('categories', CategoryController::class);

Route::resource('error', ErrorController::class);



Route::get('/', function () {
    return view('welcome');
});