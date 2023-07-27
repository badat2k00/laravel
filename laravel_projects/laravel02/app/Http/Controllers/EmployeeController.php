
<?php
 namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //
    public function index(){
        $employees=Employee::all();
        return view('employee',compact('employees'));
    }

    public function create(){
        return view('employee.create');
    }
    public function store(Request $request)
    {
        Employee::create([
            'emp_fullname'=>$request->emp_name,
            'emp_dob'=>$request->emp_dob,
            'emp_mobile'=>$request->emp_mobile,
            'emp_degree'=>$request->emp_degree
        ]);
        return redirect('employee')-> with('message','Employee Added');
    
    }
    
    public function destroy(int $emp_id)
    {
        Employee::find($emp_id)->delete();
        return redirect('employee');
    }

}
