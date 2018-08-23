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

Route::get('/', function () {
    return view('welcome');
});

Route::get('student/{student_no}', function($student_no) {
	return "學號 : $student_no";
});

Route::get('student/{student_no}/score/{subject?}', function($student_no, $subject = null) {
	return "學號 : $student_no <br> 科目 : " . (is_null($subject) ? "所有科目" : $subject) . " 的成績";
})->where(['subject' => '(chinese|english|math)']);

