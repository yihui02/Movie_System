<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable=['name','description','date','price','images','CategoryID'];
    public function movie(){

        return $this->belongsTo('App\Models\Category');

}
}
