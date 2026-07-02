<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Listar todos os cursos.
     */
    public function index()
    {
        return view('courses.index');
    }

    /**
     * Exibir os detalhes de um curso específico.
     */
    public function show()
    {
        return view('courses.show');
    }

    /**
     * Exibir o formulário para cadastrar um novo curso.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Salvar um novo curso no banco de dados.
     */
    public function store()
    {
        // return view('courses.index');
        dd("Salvar o curso no banco de dados aqui");
    }

    /**
     * Exibir o formulário para editar um curso.
     */
    public function edit()
    {
        return view('courses.edit');
    }

    /**
     * Atualizar as informações de um curso.
     */
    public function update()
    {
        // return view('courses.index');
        dd("Atualizar o curso no banco de dados aqui");
    }

    /**
     * Excluir um curso.
     */
    public function destroy()
    {
        // return view('courses.index');
        dd("Excluir o curso do banco de dados aqui");
    }
}
