<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

//Route::get('/', function () {
//
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});


Route::get('/', function() {
    return Inertia::render('TodoAppPages/Main', [
        'apiVersion' => '1.2',
        'author' => 'Ugur Cengiz'
    ]);
})->middleware('auth');



Route::get('login-v2', function(){
    return Inertia::render('TodoAppPages/LoginPage', []);
})->name('loginv2');



Route::get('/todolist', function(){
    return Inertia::render('TodoList', [
        'jobs' => [
            [
                'title' => 'Go TO CJ',
                'description' => 'You need to with Rider and go to CJ'
            ],
            [
                'title' => 'HoodWar',
                'description' => 'You need to gather your bois and take the hood down'
            ]
        ]
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
