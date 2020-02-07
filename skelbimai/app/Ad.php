<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['category', 'title', 'description', 'price', 'email', 'phone', 'location'];
}
