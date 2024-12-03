<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use function PHPUnit\Framework\isEmpty;

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {


    Route::get('/', function () { return Inertia::render('Home');});

    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    Route::get('/users/create', function () {
        return Inertia::render('Users/Create');
    })->middleware('can:create,App\Models\User');

    Route::post('/users', [UserController::class, 'create']);

    Route::get('/users/{user}/edit',[UserController::class, 'edit']);



    Route::get('/users/{user}/show', [UserController::class, 'show']);

    Route::put('/users/{user}', [UserController::class, 'update']);


});
