<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>....</title>
<body class="bg-info">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      
        <li class="nav-item">
          <a class="nav-link" href="{{url('employee')}}">Employee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('degrees')}}">Degree</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>

<div style="margin-top:10%">
<table class="table table-bordered border-primary w-50 rounded-5 bg-light  " width="20px" >
    <tr>
    <th>Id</th>
    <th>Employee Name</th>
    <th>Degree Name</th>
    <th>Degree Classification</th>
    <th colspan="2">Action</th>
    </tr>
    <tr>
    @foreach($degrees as $item)
        <td>{{$item->id}}</td>
        <td>{{$item->employee->name}}</td>
        <td>{{$item->deg_classification}}</td>
        <td><a href="{{url('degrees/'.$item->id.'/edit')}}"class="btn btn-success">Edit</a></td>
        <td><a href="{{url('degrees/'.$item->id.'/delete')}}" class="btn btn-danger"">Delete</a></td>
    </tr>
    @endforeach
</table>
<div class="text-center m-3">
    <button class="btn btn-success ">
        <a class="btn btn-success text-light" href="{{url('degrees/create')}}">Create new product</a>
    </button>
    </div>

</div>
</body>
<style>
table {
    text-align: center;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}
</style>
