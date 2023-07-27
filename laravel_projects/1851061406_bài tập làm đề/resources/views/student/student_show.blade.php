@extends('layout.index')
@section('title',"edit")
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $student->fullname }}</h5>
        <p class="card-text">Address : {{ $student->address }}</p>
        <p class="card-text">Birthday : {{ $student->birthday }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection