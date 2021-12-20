@extends('plantillas.plantilla')

@section('titulo', 'home')

@section('cuerpo')
  <h1>crear curso</h1>
<form action="{{route('cursos.store')}}" method="POST" class="formularios">
 

@csrf
 
   <input name="name" type="text" value="{{old('name')}}" placeholder="name" class="cajaiput" > <br>
  @error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
  @enderror
   <input name="categoria" value="{{old('categoria')}}" type="text" placeholder="catego" class="cajaiput"><br>
  @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>
  @enderror
   <input name="description" value="{{old('description')}}"  placeholder="description" class="cajaiput"> <br>
  @error('description')
    <br>
    <small>*{{$message}}</small>
    <br>
  @enderror
   <input type="submit" value="enviar">
   <div class="sangria">
 
</form>


@endsection

