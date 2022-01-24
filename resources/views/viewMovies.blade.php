@extends('layout')
@section('content')



<div class="row">
    
    <div class="col-m-2"></div>
    <div class="col-sm-10">
        <div class="card-body">
            <div class="row">
                @foreach($movies as $movie)

                <div class="height d-flex justify-content-center align-items-center">
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="mt-2">
             
                <div class="mt-5">
                    <h5 class="text-uppercase mb-0">{{$movie->name}}</h5>
                    <h1 class="main-heading mt-0">RM {{$movie->price}}</h1>
                    
                </div>
            </div>
            <div class="image"> 
            <img src = "{{asset('images/')}}/{{$movie->images}}" width = "100" class = "img-fluid ">
            </div>
        </div>
        
        <p>{{$movie->description}}</p>
        <a href = "{{route('movie.details',['id'=>$movie->id])}}" class = "btn btn-danger">Details</a> 
   


        
    </div>
</div>



    
            @endforeach

        </div>
    </div>

    

</div>
@endsection