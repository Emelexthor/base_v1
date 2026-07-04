@extends('layouts.admin')

@section('content')
    <h2>Cadastrar o Curso</h2>

    <a href="{{ route('courses.index') }} ">Listar Cursos</a><br><br>
     @if (session('success'))
        <p style="color: #082">{{ session('success') }}</p>
     @endif

    <form action="{{ route('courses.store') }} " method="POST">
        @csrf
        @method('POST')

        <input type="text" name="name" placeholder="Nome do curso" value="{{ old('name') }} " required><br><br>
        <button type="submit">Cadastrar</button>


    </form>
@endsection
