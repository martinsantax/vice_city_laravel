<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
  public $table = 'sizes';
  public $primaryKey = 'id';
//public $timestamps = false;
  public $guarded = [];
}
