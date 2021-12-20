@extends('plantillas.plantilla')

@section('titulo', 'editar curso')

@section('cuerpo')
  <h1>editar curso</h1>
<form action="{{route('cursos.update', $curso)}}" method="POST" class="formularios">
  
@method('put')
@csrf
 
   <input value="{{old('name', $curso->name)}}" name="name" type="text" placeholder="name" class="cajaiput" > <br>
  @error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
  @enderror
   <input value="{{old('categoria', $curso->categoria)}}" name="categoria" type="text" placeholder="catego" class="cajaiput"><br>
  @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>
  @enderror
   <textarea name="description" type="" placeholder="description" class="cajaiput">{{old('description', $curso->description)}}</textarea> <br>
  @error('description')
    <br>
    <small>*{{$message}}</small>
    <br>
  @enderror
   <input type="submit" value="enviar">
   <div class="sangria">
 
</form>


@endsection


