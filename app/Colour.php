<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
  public $table = 'colours';
  public $primaryKey = 'id';
//public $timestamps = false;
  public $guarded = [];
}
