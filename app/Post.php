<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    //
    protected $collection = 'posts';
    protected $fillable = ['title' , 'body' , 'user'];

}
