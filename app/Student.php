<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['fullname', 'gender',  'placeofbirth', 'dateofbirth', 'image', 'certificate', 'cv'];
}
