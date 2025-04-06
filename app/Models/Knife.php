<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Knife extends Model
{
    protected $fillable = ['knife_name', 'description', 'price', 'image'];
}
