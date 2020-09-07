<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable = [
    	
    	'name','title','tel','email','day','body'
    ];
}