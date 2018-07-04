<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppartmentUser extends Model
{
    protected $fillable = ['user_id', 'appartment_id'];
}
