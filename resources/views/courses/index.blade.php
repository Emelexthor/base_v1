@extends('layouts.admin')

@section('content')
    <h2>Listagem de cursos</h2>



    <a href="{{ route('course.create') }}">
        <button type="button">Cursos</button>
    </a><br><br>


    <a href="{{ route('home') }}">
        <button type="button">Página Inicial</button>
    </a><br><br>

    <x-alert />

    @forelse ($courses as $course)
        {{ $course->id }}<br>
        {{ $course->name }}<br>
        {{ 'R$ ' . number_format($course->price, 2, ',', '.') }}<br>
        {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}<br>
        {{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i:s') }}<br>

        <a href="{{ route('course.show', ['course' => $course->id]) }}">
            <button type="button">Visualizar</button>
        </a><br>
        <a href="{{ route('classe.index', ['course' => $course->id]) }}">
            <button type="button">Aulas</button>
        </a><br><br><br>
        <a href="{{ route('course.edit', ['course' => $course->id]) }}">
            <button type="button">Editar</button>
        </a><br>
        <a href="{{ route('classe.create', ['course' => $course->id]) }}">
            <button type="button">Cadastrar</button>
        </a><br><br>

        <form action="{{ route('course.destroy', ['course' => $course->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este curso?')">
                Deletar
            </button>
        </form>

        <hr>
    @empty
        <p style="color: #f00;">Nenhum curso encontrado.</p>
    @endforelse
@endsection
