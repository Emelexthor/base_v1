@extends('layouts.admin')

@section('content')
    <h2>Listagem de cursos</h2>


    <a href="{{ route('courses.show') }}">Visualizar</a><br>
    <a href="{{ route('courses.create') }}">Cadastrar</a><br>
    <a href="{{ route('courses.edit') }}">Editar</a><br>

@endsection
