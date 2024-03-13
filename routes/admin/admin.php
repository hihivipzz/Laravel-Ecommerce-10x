<?php

use App\Http\Admin\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('', [AdminCategoryController::class, 'getCategoryList']);
    });
});
?>
