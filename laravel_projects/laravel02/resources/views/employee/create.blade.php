<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class=" bg-info" >
<div class="container  w-25 " style="margin-top:200px">
    
    <form class= "border border-primary rounded-3 bg-light p-3 "action="{{url('employee')}}" method="post">
        @csrf
        <h2 class="text-center">Create Employee</h2>
        
        <label for="emp_fullname">
            Employee Name:</label>
            <input type="text" class="form-control" name="emp_fullname">
        <br>
        
        <label for="emp_dob">
            Employee Dob:</label>
            <input type="text" class="form-control" name="emp_dob">
        <br>
        <label for="emp_address">
            Employee Address:</label>
            <input type="text" class="form-control" name="emp_address">
        <br>
        <label for="emp_mobile">
            Employee Mobile:</label>
            <input type="text" class="form-control" name="emp_mobile">
        <br>

        <label for="emp_degree">
            Employee Degree:</label>
            <input type="text" class="form-control" name="emp_degree">
        <br>
            <div class="d-flex justify-content-around">
                <button type="submit" class="btn btn-primary ">Create</button>
                <button type="reset" class="btn btn-primary ">Cancel</button>
            </div>
        </form>
    </div>
    <div class="text-center m-3">
    <button class="btn btn-danger ">
        <a class="btn btn-danger text-light" href="{{url('employee')}}">Back</a>
    </button>
    </div>
</body>

</html>
