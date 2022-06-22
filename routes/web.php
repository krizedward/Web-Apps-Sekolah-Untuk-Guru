<?php

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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('kelas', 'ClassedController');
Route::resource('sekolah', 'SchoolController');
Route::resource('guru', 'TeacherController');
Route::resource('murid', 'StudentController');
Route::resource('prestasi', 'AwardStudentController');
Route::resource('lulusan', 'GraduateStudentController');
Route::resource('surat', 'LetterController');