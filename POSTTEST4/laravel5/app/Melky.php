<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Melky extends Model
{
    protected $table = 'Melky';
    protected $fillable = ['username','password'];
    
}
