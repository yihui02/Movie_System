@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <a class="nav-link" href="{{url('/home')}}"><img src="{{ asset('images/home.jpg')}}"  alt="" class="img-fluid" width=100%  > </a>
        </div>                    
    </div>   
</br></br>
    <h1><b><u>MOVIE</u></b></h1>     
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-4" style="text-align: center;">
            <img src="{{ asset('images/spider-man.png')}}" width=85% alt="" class="img-fluid" > 
            <br><br>
            <b><p>Spider-Man : No Way Home</p></b>
        </div>
        <div class="col-sm-4" style="text-align: center">
            <img src="{{ asset('images/black-widow.jpg')}}" width=90% alt="" class="img-fluid"> 
            <br><br>
            <b><p>Black Widow</p></b>       
        </div>
        <div class="col-sm-4" style="text-align: center" >
            <img src="{{ asset('images/jungle_cruise.jpg')}}" width=90% alt="" class="img-fluid" > 
            <br><br>
            <b><p>Jungle Cruise</p></b>
        </div>                
    </div>            
</div>
<br><br>
<div class="container-fluid">
    <div class="copyright text-center">
         &copy; Copyright <strong>IMDB company</strong>. All Rights Reserved
    </div>
    <div class="credits text-center">
        Designed by <a href="https://www.imdb.com/title/tt7233828/">IMDB Company</a>
    </div>
</div>
@endsection