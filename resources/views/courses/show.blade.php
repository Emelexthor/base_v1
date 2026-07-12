 @extends('layouts.admin')

 @section('content')
     <h2>Visualizar o Curso</h2>

     <a href="{{ route('course.index') }}">
        <button type="button">Listar</button>
     </a><br><br>

     <a href="{{ route('course.edit', ['course' => $course->id]) }}">
         <button type="button">Editar</button>
     </a><br><br><br>

     <form action="{{ route('course.destroy', ['course' => $course->id]) }}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este curso?')">Deletar</button>
     </form><br>

      <x-alert />

     ID: {{ $course->id }}<br>
     Nome: {{ $course->name }}<br>
     Preço:{{ 'R$ ' . number_format($course->price, 2, ',', '.') }}<br>
     Criado em: {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}<br><br>
     Atualizado em: {{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i:s') }}<br><br>
 @endsection
