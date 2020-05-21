<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
    * The games that belong to the category.
    */
   public function games()
   {
       return $this->belongsToMany('App\Game', 'category_game');
   }
}
