@extends('plantillas.plantilla')

@section('titulo', 'home')

@if (session('info'))
    <script>
      alert("{{session('info')}}")
    </script>
  @endif
  
@section('cuerpo')
   <h1>pagina de cursos</h1>
@endsection