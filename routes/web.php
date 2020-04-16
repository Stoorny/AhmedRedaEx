<?php

use Illuminate\Support\Facades\Route;
Auth::routes();
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('layout');
});

Route::get('/Exam/create/question', 'Questioncontroller@create');
Route::post('/Exam/create/question','Questioncontroller@store');
Route::post('/Exam','Examcontroller@correct');
Route::get('/Exam/create','Examcontroller@create');
Route::post('/Exam/create','Examcontroller@store');
Route::get('/Exam/edit','Examcontroller@index');
Route::put('/Exam/edit/question/{id}','Questioncontroller@update');
Route::delete('/Exam/edit/question/{id}','Questioncontroller@delete');
Route::delete('/Exam/edit/{id}','Examcontroller@delete');
Route::get('/Exam/edit/question/{id}','Questioncontroller@edit');
Route::get('/Exam/edit/{id}','Examcontroller@edit');
Route::post('/Exam/edit/{id}','Examcontroller@addquestion');
Route::get('/Exam/{id}','Examcontroller@Show');