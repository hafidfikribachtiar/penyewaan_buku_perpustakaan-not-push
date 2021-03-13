<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//login & logout
Route::get('admin/auth/login', [App\Http\Controllers\Backend\AuthController::class, 'getLogin']);
Route::post('admin/auth/login', [App\Http\Controllers\Backend\AuthController::class, 'postLogin']);
Route::get('admin/app', [App\Http\Controllers\Backend\AuthController::class, 'getApp']);
Route::get('admin/auth/logout', [App\Http\Controllers\Backend\AuthController::class, 'getLogout']);
Route::get('admin/books', [App\Http\Controllers\BooksController::class, 'getIndex']);
Route::get('admin/books/add', [App\Http\Controllers\BooksController::class, 'getAdd']);
Route::post('admin/books/save', [App\Http\Controllers\BooksController::class, 'postSave']);

Route::group(["prefix"=>"admin"], function() {
    // Route::get("/books", "BooksController@getIndex");
    // Route::get("/books/add", "BooksController@add");
    Route::get("/books/delete", "BooksController@delete");
    Route::get("/books/edit/{id}", "BooksController@getEdit");
    // Route::post("/books/save","BooksController@postSave");
    Route::group(["prefix"=>"auth"], function() {
        // Route::post("login","Backend\Auth\AuthController@postLogin");
    });

    Route::group(["middleware"=>[\App\Http\Middleware\AdminMiddleware::class]], function() {
        // Route::get("/app", "Backend\Auth\AuthController@app");
        // Route::get("/logout", "Backend\Auth\AuthController@getLogout")->name('logout');
    });
});


