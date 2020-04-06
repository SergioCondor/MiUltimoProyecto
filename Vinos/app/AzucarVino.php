<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AzucarVino extends Model
{
  protected $fillable = [
      'nombre', 'azucarresidual'
  ];
}
