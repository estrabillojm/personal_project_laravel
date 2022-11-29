<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccessController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ROLE MODULE ROUTES
Route::group(["prefix"=>'roles'], function(){
    Route::get("fetch-roles", [RoleController::class, 'fetchAll']);
    Route::get("fetch-roles/{id}", [RoleController::class, 'fetchByID']);
    Route::post("save", [RoleController::class, 'register']);
});


// USER MODULE ROUTES
Route::group(["prefix"=>'users'], function(){
    Route::get("fetch-users", [UserController::class, 'fetchAllUsers']);
    Route::get("fetch-users/{id}", [UserController::class, 'fetchByID']);
    Route::post("save", [UserController::class, 'register']);
});


// ACCESS MODULE ROUTES
Route::group(["prefix"=>'access'], function(){
    Route::get("access", [AccessController::class, 'fetchAll']);
    Route::get("access/{id}", [AccessController::class, 'fetchByID'])->name('fetchUserByID');
    Route::post("save", [AccessController::class, 'register']);
});