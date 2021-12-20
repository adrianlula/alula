@extends('plantillas.plantilla')

@section('titulo', $curso->name)
 
@section('cuerpo')
<h1>
<?php
  if($nivel){
    echo "curso de ".$curso." del nivel ".$nivel;
  }else{
    echo "bienbenido al curso: ".$curso->name."<br>";
  }
?>
</h1><br>

<a href="{{route('cursos.index')}}">regresar a los cursos</a><br>
<a href="{{route('cursos.edit', $curso)}}">editar curso</a>

<p>categoria:  {{$curso->categoria}}</p>

<p>descripcion: {{$curso->description}}</p>

<form action="{{route('cursos.destroy', $curso)}}" method="POST" >

@method('delete')
@csrf

  <button type="submit">eliminar</button>
</form>
@endsection
