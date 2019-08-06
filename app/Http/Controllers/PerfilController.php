<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class PerfilController extends Controller
{
    public function perfil(Request $request)
	{
		$rules = [
          'email' => "required",
          'telefono' => "required",
          'dni' => "required",
          'direccion' => "required",
          'codigo_postal' => "required",
          'ciudad' => "required",
          'fecha_de_nacimiento'=> "required",
          'image' => "required"
     ];
      $messages = [
          'required' => "Este campo es obligatorio"
     ];

      $this->validate($request, $rules, $messages);

        $newPerfil = new Perfil();


       $path = $request->file('image')->store('public/users');
       $file = basename($path);

      // $newPerfil->email= $request['email'];
       $newPerfil->telefono = $request['telefono'];
       $newPerfil->dni = $request['dni'];
       $newPerfil->direccion = $request['direccion'];
       $newPerfil->codigo_postal = $request['codigo_postal'];
       $newPerfil->ciudad = $request['ciudad'];
       $newPerfil->fecha_de_nacimiento= $request['fecha_de_nacimiento'];
       $newPerfil->image = $file;

       $newPerfil->save();
       return redirect('home');

  }

    public function edit($id)
    {


    }


    public function update(Request $request)
    {


      $id=$request['user_id'];
       $perfil=\Auth::user($id);


      if ($request->file('image')) {
          $path = $request->file('image')->store('public/users');
          $file = basename($path);
        } else {
          $file = $perfil->image;

       }

     //  $perfil->email = $request['email'];
       $perfil->telefono = $request['telefono'];
       $perfil->dni = $request['dni'];
       $perfil->direccion = $request['direccion'];
       $perfil->codigo_postal= $request['codigo_postal'];
       $perfil->ciudad = $request['ciudad'];
       $perfil->fecha_de_nacimiento = $request['fecha_de_nacimiento'];
       $perfil->image = $file;

       $perfil->save();
       return redirect('/home');
    }



	}
