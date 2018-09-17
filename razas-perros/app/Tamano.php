<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tamano extends Model{

  public function razas() {
  return $this->hasMany('App\Raza');
  }

}
