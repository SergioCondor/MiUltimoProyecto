<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EdadVino extends Model
{
  protected $fillable = [
      'nombre', 'TiempoBarrica', 'TiempoBotella','TiempoTotal','Crianza','Reserva','GranReserva'
  ];
}
