<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    //
    protected $table = 'jokes';

    public $primarykey = 'id';
    public $j = 'joke';
}
