<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['client_img','client_name','client_proffesion','client_feedback','status'];
}
