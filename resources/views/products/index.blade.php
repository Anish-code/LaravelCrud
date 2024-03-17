<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Curd</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Products</a></li>
          </ul>
        </div>
      </nav>
    <div class="container">

        <div class="text-right">
            <a href="newproduct" class="btn btn-primary mt-3">New Products</a>
        </div>
        @if($message = Session::get('success'))
        <div class="alert alert-success alert-block mt-3">
            <strong>{{ $message}}</strong>

        </div>
      @endif
        <table class="table table-hover mt-3">
          <thead>
            <tr>
              <th>Sno.</th>
              <th>Name</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>    
              <td><h4>{{$loop->index+1}}</h4></td>
              <td><h4><a href="products/{{$product->id}}/description" class="text-dark">{{$product->name}}</a></h4></td>
              <td>
                <img src="products/{{$product->image}}" class="rounded" width="75" height="50" />
              </td>
              <td><h4><a href="products/{{$product->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="products/{{$product->id}}/delete" class="btn btn-danger btn-sm">Delete</a></h4></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        
    </div>

    
</body>
</html>