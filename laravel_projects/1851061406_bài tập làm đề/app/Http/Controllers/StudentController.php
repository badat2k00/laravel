<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //
    public function get_all_student(){
        $students = Student::all();
        return view('student.student_manage',['students'=>$students]);
    }

    public function get_student_by_id($id){
        $student = Student::find($id);
        return view('student.student_edit', ['student' => $student]);
    }
    public function edit($id){
        $student = Student::find($id);
        $student->fullname = request('fullname');
        $student->birthday = request('birthday');
        $student->address = request('address');
        $student->save();
        return redirect('/student');
    }
    public function destroy($id){
        $student = Student::find($id);
        $student->destroy($id);
        return redirect('student');
    }
    public function show($id){
        $student = Student::find($id);
        return view('student.student_show' ,['student' => $student]);
    
    }
    public function create(){
        return view('student.student_create');
    }
    public function store(Request $request){
        $input = $request->all();
        Student::create($input);
        return redirect('student');
    }
}
