
@extends('layout.index')
@section('title',"all")
@section('content')
    <div class="container">
        <div class="table-table-striped">
            <div class="col-12">
                <h1>Student</h1>
                <a href="{{ route('student.create')}}" title=""><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>ADD</button></a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FullName</th>
                            <th>Birthday</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->fullname }}</td>
                                <td>{{ $student->birthday }}</td>
                                <td>{{ $student->address }}</td>
                         
                                <td>
                                <a href="{{ route('student.show' ,$student->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning">EDIT</a>
                                    <a href="{{ route('student.delete', $student->id) }}" class="btn btn-warning">DELETE</a>
                                
                                    <form method="POST" action="{{ url('/student' . '/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection



