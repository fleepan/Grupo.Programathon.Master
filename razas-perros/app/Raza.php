<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Raza extends Model{
  use SoftDeletes;
  protected $fillable=['nombre','descripcion','alturaInicial','alturaFinal','tamano_id'];
  protected $dates = ['deleted_at'];

  public function tamanos() {
  return $this->belongsTo('App\Tamano');
  }
  public function temperamentos() {
      return $this->belongsToMany('App\Temperamento',
        'razas_temperamentos', 'razas_id', 'temperamento_id'
      )->withTimestamps();
    }

}
