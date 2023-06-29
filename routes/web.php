<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contacts', function () {
    return view('contacts');
});
// Route::redirect('/', '/contacts');

Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contacts/create', [ContactController::class, 'create']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit']);
Route::put('/contacts/{contact}', [ContactController::class, 'update']);
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']);


Route::get('/welcome', function () {
    return view('welcome');
});
