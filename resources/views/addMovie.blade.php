@extends('layout')
@section('content')

<div class = "row">
    <div class ="col-sm-3"></div>
    <div class ="col-sm-6">
        <br><br>
        <h3>Create New Movie</h3>
        <form action = "{{route('addMovie')}}" method = "POST" enctype = "multipart/form-data">

        @CSRF
     

            <div class="form-group">
                <label for = "movieName">Movie Name</label>
                <input type = "text" class="form-control" id="movieName" name ="movieName">
            </div>

            
            <div class="form-group">
                <label for = "movieDescription">Movie Description</label>
                <input type = "text" class="form-control" id="movieDescription" name ="movieDescription">
            </div>

            <div class="form-group">
                <label for = "movieDate">Movie Release Date</label>
                <input type = "text" class="form-control" id="movieDate" name ="movieDate">
            </div>

            <div class="form-group">
                <label for = "pmoviePrice">Movie Ticket Fee</label>
                <input type = "number" class="form-control" id="moviePrice" name ="moviePrice" min="0">
            </div>
            
            <div class="form-group">
                <label for="movieImage">Movie Image</label>
                <input type="file" class="form-control" id="movieImage" name="movieImage">
            </div>

            <div class="form-group">
                <label for = "catID">Category</label>
                <select name ="CategoryID" id="CategoryID" class="form-control">

                @foreach($CategoryID as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

</select>
            </div>

            



            <button type = "submit" class = "btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class ="col-sm-3"></div>

</div>
@endsection