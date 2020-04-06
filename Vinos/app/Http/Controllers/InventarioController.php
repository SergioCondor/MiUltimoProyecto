<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
class InventarioController extends Controller
{
  public function index()
  {
    return view('layouts.inventario');
  }
  public function store(Request $request)
  {
    $validador = Validator::make($request->all(),[
      'nombre' =>'required|min:3|max:20',
      'img' =>'required|min:3|max:20',
      'stock' =>'required|min:1',
      'codigo' =>'required|min:1',
      'color' =>'required|min:3|max:20',
      'grado' =>'required|min:3|max:20',
      'TiempoBarrica' =>'required|min:3|max:20',
      'TiempoBotella' =>'required|min:3|max:20',
      'TiempoTotal' =>'required|min:3|max:20',
      'Crianza' =>'required|min:3|max:50',
      'Reserva' =>'required|min:3|max:50',
      'GranReserva' =>'required|min:3|max:50',
      'azucarresidual' =>'required|min:3|max:20'
    ]);

    if($validador ->fails()){
      dd("favor de llenar los campos",
      $request->nombre,
      $request->img,
      $request->stock,
      $request->codigo,
      $request->color,
      $request->grado,
      $request->TiempoBarrica,
      $request->TiempoBotella,
      $request->TiempoTotal,
      $request->Crianza,
      $request->Reserva,
      $request->GranReserva,
      $request->azucarresidual,


    );
    }else{
      dd("todo va bien",
      $request->nombre,
      $request->img,
      $request->stock,
      $request->codigo,
      $request->color,
      $request->grado,
      $request->TiempoBarrica,
      $request->TiempoBotella,
      $request->TiempoTotal,
      $request->Crianza,
      $request->Reserva,
      $request->GranReserva,
      $request->azucarresidual,

);
    }
    dd($request);
  }
}
