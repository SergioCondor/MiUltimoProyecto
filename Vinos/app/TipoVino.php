<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVino extends Model
{
  protected $fillable = [
      'nombre', 'color', 'grado'
  ];
}
