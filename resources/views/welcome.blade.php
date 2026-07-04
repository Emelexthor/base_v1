@extends('layouts.admin')

@section('content')
    <h2>Listagem de cursos</h2>

    <a href="{{ route('courses.index') }}">Listar</a><br>
    <a href="{{ route('courses.create') }}">Cadastrar</a><br>

@endsection
