@extends('layouts.admin')

@section('content')
    <h2>Editaro Curso</h2>
    <a href="{{ route('course.index') }}">
        <button type="button">Listar</button>
    </a><br><br>

    <a href="{{ route('course.show', ['course' => $course->id]) }}">
        <button type="button">Visualizar</button>
    </a><br><br><br>



    <x-alert />

    <form action="{{ route('course.update', ['course' => $course->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome:</label><br>
        <input type="text" name="name"placeholder="Nome do curso" value="{{ $course->name }}"><br>
        <label for="price">Preço:</label><br>
        <input type="text" name="price" placeholder="Preço do curso: 2.47" value="{{ $course->price }}" required><br>

        <button type="submit">Atualizar</button>

    </form>
@endsection
