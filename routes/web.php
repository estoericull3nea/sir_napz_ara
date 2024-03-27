<?php

use App\Http\Controllers\PagesControllerAGJC;
use App\Http\Controllers\StudentController;
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

// this is the test for vscode.dev/

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/contact-us', function () {
    return view('contact_us');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/control-structure', function () {
    return view('control_structure');
});

Route::get('/students/{id?}', [PagesControllerAGJC::class, 'get_all_student']);

Route::resource('/student/{id?}', StudentController::class);