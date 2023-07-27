
@extends('layout.index')
@section('title',"all")
@section('content')
    <div class="container">
        <div class="table-table-striped">
            <div class="col-12">
                <h1>Student</h1>
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

                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning">EDIT</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
