<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="bg-info">
    <div class="container w-25 " style="margin-top:200px">
    <form class="border border-primary rounded-3 bg-light p-3" action="{{url('/degrees/'.$degree->id)}}" method="post">
        @csrf
        @method('PUT')
        <h2 class="text-center">Update Degree</h2>
        <div class="mb-3">
                        <label>Select Employee</label>
                        <select name="emp_id" class="form-control">
                            @foreach($employees as $item)
                                <option value="{{$item->emp_id}}">{{$item->name}}
                                </option>
                            @endforeach
                            </select>
                    </div>
        <label for="deg_name"> Degree name:</label>
        <input type="text" class="form-control"name="deg_name" value="{{ $deg->deg_name }}">
        <br>
        <label for="deg_classification"> Degree Classification:</label>
        <input type="text" class="form-control" name="deg_classification" value="{{ $deg->deg_classification }}">
        <br>
        
        <div class="d-flex justify-content-around">
            <button type="submit" class="btn btn-primary ">Edit</button>
            <button type="reset" class="btn btn-primary ">Cancel</button>
            </div>
    </form>
    </div>
    <div class="text-center m-3">
    <button class="btn btn-danger ">
        <a class="btn btn-danger text-light" href="{{url('degrees')}}">Back</a>
    </button>
    </div>

</body>
</html>
