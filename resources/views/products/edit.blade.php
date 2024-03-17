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

      @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message}}</strong>

        </div>
      @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h3>Product Edit #{{$product->name}}</h3>
                <div class="card mt-3 p-3">
                    <form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{old('name',$product->name)}}" class="form-control" />
                            @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="4" name="description">{{old('description', $product->description)}}</textarea>
                            @if($errors->has('description'))
                            <span class="text-danger">{{$errors->first('description')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" />
                            @if($errors->has('image'))
                            <span class="text-danger">{{$errors->first('image')}}</span>
                            @endif
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
                
            </div>
        </div>
        
    </div>

    
</body>
</html>
