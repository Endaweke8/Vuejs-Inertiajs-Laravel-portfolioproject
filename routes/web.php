<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/',[WelcomeController::class,'welcome'])->name('welcome');
Route::post('/contact',[ContactController::class,'sendMessage'])->name('contact');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','verified'])->group(function(){
    Route::get('/dashboard',function(){
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('/skills',SkillController::class);
    // Route::get('/create-skill',[SkillController::class,'create'])->name('create-skill');
    // Route::post('/store-skill',[SkillController::class,'store'])->name('store-skill');


    Route::resource('/projects',ProjectController::class);
    // Route::get('/create-project',[ProjectController::class,'create'])->name('create-project');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
