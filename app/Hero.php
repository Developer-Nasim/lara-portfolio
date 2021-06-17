<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{  
    protected $fillable = ['title','subtitle','link','animated_text','image','status'];
}
