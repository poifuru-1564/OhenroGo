<?php

use App\Http\Controllers\EditorCategoryController;

Route::get('/editor/categories', [EditorCategoryController::class, 'index']);       // まとめて
Route::get('/editor/categories/{category}', [EditorCategoryController::class, 'show']); // 個別
