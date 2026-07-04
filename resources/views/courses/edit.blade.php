@extends('layouts.admin')

@section('content')
    <h2>Editaro Curso</h2>


   <form action="{{ route('courses.update', ['course' => $course->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome:</label><br>
        <input type="text" name="name"placeholder="Nome do curso" value="{{ $course->name }}"><br>

        <button type="submit">Atualizar</button>

   </form>
@endsection
