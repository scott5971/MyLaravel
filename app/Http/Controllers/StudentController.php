<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudentData($student_no) {
		return "學號 : $student_no";
	}
	
	public function getStudentScore($student_no, $subject = null) {
		return "學號 : $student_no <br> 科目 : " . (is_null($subject) ? "所有科目" : $subject) . " 的成績";
	}
}
