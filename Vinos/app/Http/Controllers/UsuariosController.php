<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
class UsuariosController extends Controller
{
  public function index()
  {
    return view('layouts.usuarios');
  }
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(),[
      'nombre'=>'required|min:3|max:20',
      'email'=>'required|min:3|email',
      'pass1'=>'required|min:3|required_with:pass2|same:pass2',
      'pass2'=>'required|min:3'
    ]);
    if($validator ->fails()){
      dd("favor de llenar los campos",
      $request->nombre,
      $request->email,
      $request->pass1,
      $request->pass2


    );

    }else{
      dd("todo va bien",
      $request->nombre,
      $request->email,
      $request->pass1,
      $request->pass2);

    }

  }
}
