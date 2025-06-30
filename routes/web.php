<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/logout-link', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login')->with('status', 'You have been logged out successfully.');
})->name('logout.link');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//locations 

Route::get('/organisation/locations_list', function(){
    return view('organisation.locations_list');
})->name('organisation.locations_list');

// //locations_form
// Route::get('/organisation/locationsForm', action: function(){
//     return view('organisation.locations_form');
// })->name('organisation.form');

//departments
Route::get('/organisation/departments', function () {
    return view('organisation.department_list');
})->name('organisation.department_list')->middleware(['auth', 'verified']);

//designations
Route::get('/organisation/designations', function () {
    return view('organisation.designation_list');
})->name('organisation.designation_list')->middleware(['auth', 'verified']);


//activities
Route::get('/organisation/activities', function () {    
    return view('organisation.activities_list');
})->name('organisation.activities_list')->middleware(['auth', 'verified']);

//access
Route::get('/organisation/accessRules', function () {
    return view('organisation.access_list');
})->name('organisation.access_list')->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';
