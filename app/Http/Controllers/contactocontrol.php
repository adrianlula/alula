<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\cotactoMailable;
use Illuminate\Support\Facades\Mail;

class contactocontrol extends Controller
{
    public function index(){
        return view('email.index');
      }

      public function store(Request $formulario){
        $formulario->validate([
          'nombre' => 'required',
          'correo' => 'required|email',
          'mensaje' => 'required',
        ]);
        $correo = new cotactoMailable($formulario->all());
        Mail::to('adrian7camala@gmail.com')->send($correo);
        
        return redirect()->route('home')->with('info', 'mensaje enviado');
      }
}
