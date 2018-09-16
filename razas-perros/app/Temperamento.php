<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class temperamento extends Model{

  public function razas() {
      return $this->belongsToMany('App\Raza',
        'razas_temperamentos', 'temperamento_id', 'razas_id'
      )->withTimestamps();
    }

}
