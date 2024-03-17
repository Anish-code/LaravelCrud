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
    
    <div class="card mt-3 p-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 mt-4">
                    <div class="card p-4">
                        <p>Name: <b>{{$product->name}}</b></p>
                        <p>Description:<br> <b>{{$product->description}}</b></p>
                        <img src="/products/{{$product->image}}" class="rounded" width="400px" />
    
                    </div>
    
                </div>
            </div>
    
        </div>
    </div>
    
</body>
</html>