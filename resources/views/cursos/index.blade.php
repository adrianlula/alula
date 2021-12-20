@extends('plantillas.plantilla')

@section('titulo', 'home')

@section('cuerpo')
  <h1>bienbenido a la pagina cursos</h1><br> 

  <a href="{{route('cursos.create')}}">crear curso</a><br>

    <ul>
       @foreach ($cursos as $curso)
          <li>
            <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
            <br>
           
          </li>
       @endforeach
    </ul>

    {{$cursos->links()}}

@endsection
 