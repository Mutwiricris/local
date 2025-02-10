<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('switch-language', function (Illuminate\Http\Request $request) {
    $language = $request->input('language', 'en');
    if (in_array($language, ['en', 'fr', 'zh'])) {
        session(['locale' => $language]);
    }
    return redirect()->back();
})->name('switch-language');


Route::get('/', function () {
    return view('welcome');
});
//main user Dashboard
Route::get('/users/Dashboard',function(){
    return view('Users.index');
})->middleware(['auth', 'verified'])->name('users');
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:user'])->prefix('user')->group(function () {
    Route::get('/dashboard', function (){
        return view('Users.index');
    })->name('dashboard');
});

Route::middleware(['auth', 'role:writer'])->group(function () {
    Route::get('/writer-dashboard', function (){
        return view('Writers.index');
    });
});

require __DIR__.'/auth.php';
