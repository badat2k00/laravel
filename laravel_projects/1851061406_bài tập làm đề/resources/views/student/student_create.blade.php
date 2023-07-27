@extends('layout.index')
@section('title',"Create")
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ route('student') }}" method="post">
        {!! csrf_field() !!}
        <label>FullName</label></br>
        <input type="text" name="fullname" id="fullname" class="form-control"></br>
        <label>Birthday</label></br>
        <input type="date" name="birthday" id="birthday" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop