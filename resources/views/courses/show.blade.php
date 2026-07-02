 @extends('layouts.admin')

 @section('content')
     <h2>Visualizar o Curso</h2>

     <a href="{{ route('courses.index') }}">Listar Cursos</a><br>
     <a href="{{ route('courses.edit') }}">Editar</a><br>
 @endsection
