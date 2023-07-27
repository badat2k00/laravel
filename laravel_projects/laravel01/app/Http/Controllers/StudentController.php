<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Student;


class StudentController extends Controller
{
    //
    public function get_all_student(){
        $student=Student::find($id);
        
        return view('student_manage');
        
    }
    public function get_student_by_id($id){
        return view('student_edit');
    }
}
