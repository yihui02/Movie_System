<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movie;
use Session;
use App\Models\Category;

class MovieController extends Controller
{
public function add(){
        $r=request(); //receive the data by GET or POST method
        $images=$r->file('movieImage');
        $images->move('images',$images->getClientOriginalName()); // images is the location
        $imageName=$images->getClientOriginalName();
        
        $addMovie=Movie::create([
            'name'=>$r->movieName, //name must same with database
            'description'=>$r->movieDescription,//field name
            'date'=>$r->movieDate,
            'price'=>$r->moviePrice,
            'CategoryID'=>$r->CategoryID,
            'images'=>$imageName,
        ]);
        
        Session::flash('success',"Movie create succesful!");

        Return redirect()->route('showMovie');
    }

    public function view(){
        //$viewMovie = Movie::all(); //generate sql select * from categories

        $viewMovie = DB::table('movies')->leftjoin('categories','categories.id','=','movies.CategoryID')
        ->select ('movies.*','categories.name as catName')->get();

        Return view ('showMovie') ->with('movies', $viewMovie);
    }

    public function delete($id){

        $deleteMovie = Movie::find($id);
        $deleteMovie->delete();
        Session::flash('success',"Movie was delete successfully!");
        Return redirect()->route('showMovie');
    }

    public function edit($id){

        $movies = Movie::all()->where('id',$id);


        return view('editMovie')->with('movies',$movies)->with('CategoryID',Category::all());
    }
    public function update(){
        $r=request();
        $movies =Movie::find($r->movieID);
        
        if($r->file('movieImage')!=''){
            $images=$r->file('movieImage');        
            $images->move('images',$images->getClientOriginalName());                   
            $imageName=$images->getClientOriginalName(); 
            $movies->images=$imageName;
            }    
        
        $movies->name=$r->movieName;
        $movies->description=$r->movieDescription;
        $movies->date=$r->movieDate;
        $movies->price=$r->moviePrice;
        $movies->CategoryID=$r->CategoryID;
        $movies->save();

        return redirect()->route('showMovie');


    }

    public function moviedetails($id){

        $movies = Movie::all()->where('id',$id);
        return view ('movieDetails')->with('movies',$movies);
    }

    public function viewMovie(){

        $movies=Movie::all();
        
        return view('viewMovies')->with('movies',$movies);
        
    }
}
