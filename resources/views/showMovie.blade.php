@extends('layout')
@section('content')

<div class = "row">
    <div class ="col-sm-3"></div>
    <div class ="col-sm-d">
        <br><br>
        <table class = "table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Image</td>
                    <td>Movie Name</td>
                    <td>Description</td>
                    <td>Release Date</td>
                    <td>Ticket Fee</td>
                    <td>Category</td>
                    <td>Action</td>

                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
            <tr>
                    <td>{{$movie->id}}</td>
                    <td>
                        <img src = "{{asset('images/')}}/{{$movie->images}}" width = "100" class = "img-fluid ">
                    </td>
                    <td>{{$movie->name}}</td>
                    <td>{{$movie->description}}</td>
                    <td>{{$movie->date}}</td>
                    <td>{{$movie->price}}</td>
                    <td>{{$movie->catName}}</td>
                    <td>
                        <a href = "{{route('editMovie',['id'=>$movie->id])}}" class = "btn btn-warning btn-xs">Edit</a> <a href = "{{route('deleteMovie',['id'=>$movie->id])}}" 
                        class = "btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>

                </tr>

                @endforeach

            </tbody>
        </table>
      
        <br><br>
    </div>
    <div class ="col-sm-3"></div>

</div>
@endsection