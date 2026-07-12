@extends('layouts.admin')

@section('content')

<h2>Cadastrar Aula</h2>

<a href="{{ route('classe.index', ['course' => $course->id]) }}">
    <button type="button">Aulas</button>
</a>

<br><br>

<x-alert />

<form action="{{ route('classe.store') }}" method="POST">
    @csrf

    <input type="hidden" name="course_id" id="course_id" value="{{ $course->id }}">

    <br><br>
   <label for="name">Corso</label><br>
    <input
        type="text"
        name="name_course"
        id="name_course"
        value="{{ $course->name }}"disabled><br><br>


    <label for="name">Nome</label><br>
    <input
        type="text"
        name="name"
        id="name"
        placeholder="Nome da aula"
        value="{{ old('name') }}"
    required><br><br>

    <label for="description">Descrição</label><br>
    <textarea
        name="description"
        id="description"
        rows="3"
        cols="30" required
        placeholder="Descrição da aula"
    >{{ old('description') }}</textarea>

    <br><br>

    <button type="submit">Cadastrar</button>
</form>

@endsection
