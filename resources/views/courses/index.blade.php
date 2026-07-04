@extends('layouts.admin')

@section('content')
    <h2>Listagem de cursos</h2>

    <a href="{{ route('courses.create') }}">Cadastrar</a><br>
  

     @forelse ($courses as $course)
        {{ $course->id }}<br>
        {{ $course->name }}<br>
        {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}<br>
        {{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i:s') }}<br>

        <a href="{{ route('courses.show', ['course' => $course->id]) }}">Visualizar</a><br>
        <a href="{{ route('courses.edit', ['course' => $course->id]) }}">Editar</a><br>
        {{-- <a href="{{ route('courses.destroy', ['course' => $course->id]) }}">Deletar</a><br> --}}

        <hr>

     @empty
       <p style="color:#f00">Nenhum curso encontrado.</p>
     @endforelse

     {{-- imprmir a pginação --}}
     {{-- {{ $courses->links() }} --}}


@endsection
