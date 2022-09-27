<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//végpontok
// get-szerez(lehet többféle módon), post-létrehoz, put-módosít, delete-töröl
Route::get('/api/copies', [UserController::class, 'index']); //összeset kilistázza, nem ua., mint a listView
Route::get('/api/copies/{id}', [UserController::class, 'show']); // 1-1 rekordot mutat id szerint
Route::post('/api/copies', [UserController::class, 'store']); //felvesz, létrehoz
Route::put('/api/copies/{id}', [UserController::class, 'update']); //módosít
Route::delete('/api/copies/{id}', [UserController::class, 'destroy']); //töröl

//view-ek végpontjai
Route::get('/copy/new', [UserController::class, 'newView']); //új adat felvétele
Route::get('/copy/edit/{id}', [UserController::class, 'editView']); // rekord módosítása
Route::get('/copy/list', [UserController::class, 'listView']); //kilistázza egy felületen keresztul az adatokat

Route::get('/api/users', [UserController::class, 'index']); //összeset kilistázza, nem ua., mint a listView
Route::get('/api/users/{id}', [UserController::class, 'show']); // 1-1 rekordot mutat id szerint
Route::post('/api/users', [UserController::class, 'store']); //felvesz, létrehoz
Route::put('/api/users/{id}', [UserController::class, 'update']); //módosít
Route::delete('/api/users/{id}', [UserController::class, 'destroy']); //töröl

//view-ek végpontjai
Route::get('/user/new', [UserController::class, 'newView']); //új adat felvétele
Route::get('/user/edit/{id}', [UserController::class, 'editView']); // rekord módosítása
Route::get('/user/list', [UserController::class, 'listView']); //kilistázza egy felületen keresztul az adatokat
