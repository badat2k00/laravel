@extends('layout.index')
@section('title',"edit")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Student</h1>
                <form action="{{ route('student.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group
                    @error('fullname')
                        has-error
                    @enderror
                    ">
                        <label for="fullname">Fullname</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $student->fullname }}">
                        @error('fullname')
                            <span class="help-block"></span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group
                    @error('birthday')
                        has-error
                    @enderror
                    ">
                        <label for="birthday">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $student->birthday }}">
                        @error('birthday')
                            <span class="help-block
                            "></span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group
                    @error('address')
                        has-error
                    @enderror
                    ">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}">
                        @error('address')
                            <span class="help-block
                            "></span>{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endsection