<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFavorite\Traits\Favoriteable;

class Product extends Model
{
    use Favoriteable;
    
    public function entry()
    {
    	return $this->belongsTo('App\Entry');
    	// 紐付け作業
    }
}
