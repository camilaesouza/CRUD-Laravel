<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active bg-white text-dark" href="{{action('HomeController@index')}}">Home</a>
        </li>
    </ul>
</nav>
<div class="container">
    <br>
    <h2 class="text-center">Edit Product</h2><br/>
    @if(isset($errors))
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @endif
    <form method="post" action="{{action('ProductController@update', $id)}}" enctype="multipart/form-data">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="product[title]" value="{{$product->title}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="product[description]" value="{{$product->description}}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <input type="file" name="product[image]" value="{{$product->image}}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="price">Price:</label>
                <input type="text" class="form-control" name="product[price]" value="{{$product->price}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>