@extends('layout')
@section('content')

<div class = "row">
    <div class ="col-sm-3"></div>
    <div class ="col-sm-6">
        <br><br>
        <h3>Update Movie</h3>
        <form action = "{{route('updateMovie')}}" method = "POST" enctype = "multipart/form-data">

        @CSRF

        @foreach($movies as $movie)
     

            <div class="form-group">
                <label for = "movieName">Movie Name</label>
                <input type = "text" class="form-control" id="movieName" name ="movieName" value ="{{$movie->name}}">
                <input type = "hidden" name="movieID" id="movieID" value ="{{$movie->id}}">
            </div>

            
            <div class="form-group">
                <label for = "movieDescription">Movie Description</label>
                <input type = "text" class="form-control" id="movieDescription" name ="movieDescription" value ="{{$movie->description}}">
            </div>

            <div class="form-group">
                <label for = "movieDate">Movie Release Date</label>
                <input type = "text" class="form-control" id="movieDate" name ="movieDate" value ="{{$movie->date}}">
            </div>

            <div class="form-group">
                <label for = "moviePrice">Movie ticket Fee</label>
                <input type = "number" class="form-control" id="moviePrice" name ="moviePrice" min="0" value ="{{$movie->price}}">
            </div>
            
            <div class="form-group">
                <label for="movieImage">Movie Image</label>
                <img src ="{{asset('images')}}/{{$movie->images}}" alt="" class="img-fluid" width ="100">
                <input type="file" class="form-control" id="movieImage" name="movieImage">
            </div>

            <div class="form-group">
                <label for = "catID">Category</label>
                <select name = "CategoryID" id="CategoryID" clsss="form-control">
                    @foreach($CategoryID as $category)
                    <option value= "{{$category->id}}">{{$category->name}}</option>
                    @endforeach
</select>
            </div>

            

        @endforeach

            <button type = "submit" class = "btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class ="col-sm-3"></div>

</div>
@endsection