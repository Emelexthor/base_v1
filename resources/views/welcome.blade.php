@extends('layouts.admin')

@section('content')
    <h2>Listagem de cursos</h2>

    <a href="{{ route('course.index') }}">Listar</a><br>
    <a href="{{ route('course.create') }}">Cadastrar</a><br>

@endsection
