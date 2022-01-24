@extends('layout')
@section('content')

<div class="row">
    @foreach($movies as $movie)
    <div class="col-m-2"></div>
    <div class="col-sm-10">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">{{$movie->name}}</h5>
                    <img src="{{asset('images/')}}/{{$movie->images}}" alt="" width="100%" class="img-fluid">
                </div>
                <div class="col-md-9">
                    <br><br>
                    <p class="card-text">{{$movie->description}}</p>
                    <div class="card-heading">Price
                        <input type="number" min="1" max="10" name="price">
                        Available: {{$movie->price}}
                    </div>
                    <br><br>
                    <div class="card-heading">RM {{$movie->price}}</div>
                    <button class="btn btn-danger btn-xs" type="submit">Add to cart</button>
                </div>

            </div>

        </div>
    </div>

    @endforeach

</div>
@endsection