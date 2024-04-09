<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffListController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * APIのルーティング定義
 *
 * /staff-listエンドポイントとStaffListControllerのindexアクションを紐付ける
 */
Route::get('/staff-list', [StaffListController::class, 'index']);
