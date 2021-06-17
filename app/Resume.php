<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{ 
    protected $fillable = ['cirtificate_img','heading','company','from','to','desciption','forthis','status'];
}
