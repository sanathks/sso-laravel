<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vertical extends Model
{
    protected $fillable=['name','domain','vertical_id','vertical_secret'];
}
