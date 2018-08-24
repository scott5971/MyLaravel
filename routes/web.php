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

Route::pattern('student_no', 's[0-9]{10}');

Route::get('/', 'HomeController@index');

Route::get('student/{student_no}', 'StudentController@getStudentData')->name('student');

Route::get('student/{student_no}/score/{subject?}', 'StudentController@getStudentScore')->where(['subject' => '(chinese|english|math)'])->name('student.score');

Route::get('cool', 'Cool\TestController@index');

Route::get('cool/blade', 'Cool\TestController@getBladeView');