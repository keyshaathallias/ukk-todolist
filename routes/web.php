<?php

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

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/tasks', function () {
    return view('pages.tasks');
});

Route::get('/task-detail', function () {
    return view('pages.detail');
});

Route::get('/create-task', function () {
    return view('pages.create');
});

Route::get('/edit-task', function () {
    return view('pages.edit');
});

Route::get('/archives', function () {
    return view('pages.archives');
});
