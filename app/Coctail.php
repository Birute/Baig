<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coctail extends Model
{
  public $fillable = ['title', 'recipe', 'photo'];
  public $timestamps = false;
}
