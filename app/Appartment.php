<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appartment extends Model
{
    protected $fillable = ['number', 'floor', 'size'];
}
