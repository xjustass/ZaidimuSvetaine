<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $fillable = ['title', 'description', 'icon', 'user_id'];

        /**
     * The categories that belong to the game.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_game');
    }


}
