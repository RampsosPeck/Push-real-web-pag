<?php

namespace Pushereal;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content'];
}
