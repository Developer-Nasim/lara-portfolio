<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['blog_image','blog_heading','blog_slug','blog_contents','blog_writter','status'];
}
