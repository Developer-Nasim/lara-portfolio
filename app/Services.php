<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{ 
    protected $fillable = ['services_icon','services_heading','services_contents','status'];
}
