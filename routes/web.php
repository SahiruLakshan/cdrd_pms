<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth',AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('Admin.home');
    })->name('dashboard');
    Route::get('/projectform', [ProjectController::class, 'view']);
    Route::post('/insertproject', [ProjectController::class, 'insertproject']);
    Route::get('/projects', [ProjectController::class, 'projects']);
    Route::get('/functions/project{no}', [ProjectController::class, 'functions'])->name('functions.project');
    Route::get('/updateform/project{no}', [ProjectController::class, 'updateform'])->name('update.project');
    Route::post('/savetask', [TaskController::class, 'savetask']);
    Route::put('/update-project/{id}', [ProjectController::class, 'updateproject']);
    Route::put('/update-task/{id}', [TaskController::class, 'updatetask']);
});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/projectview', [HomeController::class, 'projects']);
Route::get('/financial/{no}', [HomeController::class, 'financial']);
Route::get('/timeplan/{no}', [HomeController::class, 'timeplan']);
Route::get('/progress/{no}', [HomeController::class, 'progress']);
Route::get('/timeline/{wing}', [HomeController::class, 'timeline']);
Route::get('/summary/{wing}', [HomeController::class, 'summary']);

Route::get('register', [RegisteredUserController::class, 'create'])
->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('login', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
