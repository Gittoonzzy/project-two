<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/students', function(){
    return view('students');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/gallery', function(){
    return view('gallery');
});

Route::get('/student', function(){
    return view('student');
});

Route::get('/curriculam', function(){
    return view('curriculam');
});

Route::get('/applications', function(){
    return view('applications');
});

Route::get('/forms', function(){
    return view('forms');
});

Route::get('/campus', function(){
    return view('campus');
});

Route::get('/care', function(){
    return view('care');
});

Route::get('/form4', function(){
    return view('form4');
});

Route::get('/form1', function(){
    return view('form1');
});

Route::get('/form5', function(){
    return view('form5');
});

Route::get('/formGeneral', function(){
    return view('formGeneral');
});

Route::get('/any', function(){
    echo '<h1>This site is underconstruction</h1>';
});

