<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['catid', 'title', 'description', 'price', 'email', 'phone', 'location'];
}
