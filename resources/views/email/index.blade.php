@extends('plantillas.plantilla')

@section('titulo', 'contacto|')

@section('cuerpo')
   <h1>dejanos un mensaje</h1>


   <form action="{{route('contacto.store')}}" method="POST" class="formularios">
 

 @csrf
  
    <input name="nombre" type="text"  placeholder="nombre" class="cajaiput" > <br>
   @error('nombre')
     <br>
     <small>{{$message}}</small>
     <br>
   @enderror
    <input name="correo"  type="text" placeholder="correo" class="cajaiput"><br>
    @error('correo')
     <br>
     <small>{{$message}}</small>
     <br>
   @enderror
    <textarea name="mensaje" value="{{old('description')}}"  rows="3" class="cajaiput">mensaje </textarea><br>
    @error('mensaje')
     <br>
     <small>{{$message}}</small>
     <br>
   @enderror
    <input type="submit" value="enviar">
    <div class="sangria">
  
 </form>



@endsection