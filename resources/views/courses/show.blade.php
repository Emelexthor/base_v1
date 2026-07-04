 @extends('layouts.admin')

 @section('content')
     <h2>Visualizar o Curso</h2>

     <a href="{{ route('courses.index') }}">Listar Cursos</a><br>
     <a href="{{ route('courses.edit') }}">Editar</a><br>

     ID: {{ $course->id }}<br>
     Nome: {{ $course->name }}<br>
     Criado em: {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}<br>
     Atualizado em: {{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i:s') }}<br>

 @endsection
