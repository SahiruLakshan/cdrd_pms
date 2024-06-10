<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('Admin.home');
    })->name('home');
    Route::get('/projectform', [ProjectController::class, 'view']);
    Route::post('/insertproject', [ProjectController::class, 'insertproject']);
    Route::get('/projects', [ProjectController::class, 'projects']);
    Route::get('/functions/project{no}', [ProjectController::class, 'functions'])->name('functions.project');
    Route::get('/updateform/project{no}', [ProjectController::class, 'updateform'])->name('update.project');
    Route::post('/savetask', [TaskController::class, 'savetask']);
    Route::put('/update-project/{id}', [ProjectController::class, 'updateproject']);
    Route::put('/update-task/{id}', [TaskController::class, 'updatetask']);
});

Route::get('/', [HomeController::class, 'home']);
Route::get('/projectview', [HomeController::class, 'projects']);
Route::get('/financial/{no}', [HomeController::class, 'financial']);
Route::get('/timeplan/{no}', [HomeController::class, 'timeplan']);
Route::get('/progress/{no}', [HomeController::class, 'progress']);
Route::get('/timeline/{wing}', [HomeController::class, 'timeline']);
Route::get('/summary/{wing}', [HomeController::class, 'summary']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
