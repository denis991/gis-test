<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
// Route::resource('contacts', ContactController::class);


// Route::get('/', [ContactController::class, 'index']);
Route::redirect('/', '/contacts');

Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contacts/create', [ContactController::class, 'create']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit']);
Route::put('/contacts/{contact}', [ContactController::class, 'update']);
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']);


// Route::get('/', function () {
//     return view('welcome');
// });
