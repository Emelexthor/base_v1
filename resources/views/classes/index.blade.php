
@extends('layouts.admin')

@section('content')

    <h2>Listagem de aulas</h2>
   <a href="{{ route('course.index') }}">
        <button type="button">Cursos</button>
    </a><br><br>

    <x-alert />
    @forelse ($classes as $classe)
        ID: {{ $classe->id }}<br>
        Nome: {{ $classe->name }}<br>
        Descrição: {{ $classe->description }}<br>
        Curso: {{ $classe->course->name }}<br>
        Ordem da aula: {{ $classe->order_classe }}<br>
        Criado em: {{ \Carbon\Carbon::parse($classe->created_at)->format('d/m/Y H:i:s') }}<br>
        Atualizado em: {{ \Carbon\Carbon::parse($classe->updated_at)->format('d/m/Y H:i:s') }}<br
    @empty
     <p style="color: #f00;">Nenhuma aula encontrado.</p>
    @endforelse


@endsection
