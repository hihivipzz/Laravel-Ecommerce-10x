<?php

use App\Http\Admin\Controllers\AdminCategoryController;
use App\Http\Admin\Controllers\AdminProductController;
use App\Http\Services\AdminProductService;
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

Route::get('/', [AdminCategoryController::class,'getCategoryList']);
Route::get('/product', [AdminProductController::class,'getProductList']);
require __DIR__ . '/admin/admin.php';