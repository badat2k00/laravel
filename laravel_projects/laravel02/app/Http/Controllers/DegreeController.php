<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DegreeController extends Controller
{
    //
    public function index(){
        $degrees=Degree::all();
        return view('degree.index',compact('degrees'));
    }

    public function create(){

        $degrees =Degree::all();
        return view('degree.create',compact('degrees'));
    }
    public function store(Request $request)
    {   
        $Employee=Employee::findOrFail($request->employee_id);
       /*  $Employee->product()->create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'price'=>$request->price
        ]); */

        $product = new Product;
        $product->name = $request->name;
        $product->slug =Str::slug($request->slug);
        $product->price = $request->price;

        $Employee->products()->save($product);

        return redirect('products')-> with('message','Product Created');
    
    }
    public function edit($degree)
    {   
        $employees=Employee::all();
        $degree =Degree::findOrFail($degree);
        return view('degree.edit',compact('categories','product'));
    }

    public function update(Request $request ,$degree_id)
    {
        $Employee=Employee::findOrFail($request->Employee_id);
        $Employee->products()->where('id',$degree_id)->update([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'price'=>$request->price,
        ]);
        return redirect('degrees');
    
    }
    public function destroy($degree_id)
    {
        Degree::find($degree_id)->delete();
        return redirect('products');
    }
}
