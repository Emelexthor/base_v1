<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Listar todos os cursos.
     */
    public function index()
    {
        //recuperar todos os cursos do banco de dados
        //$courses = Course::where('id',100)->get();
        //4courses =Course::paginate(10);
        $courses = Course::orderBy('id', 'desc')->get();

        return view('courses.index', ['courses' => $courses]);
    }

    /**
     * Exibir os detalhes de um curso específico.
     */

    //  public function show(Request $request)
    public function show(Course $course)
    {
        // dd($request->course);
        // $course = Course::where('id', $request->course)->first();

        // carregar a view de detalhes do curso, passando os dados do curso para a view
        return view('courses.show', ['course' => $course]);
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
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
    ]);

    Course::create([
        'name' => $request->name,
        'price' => $request->price,
    ]);

    return redirect()->route('courses.create')
        ->with('success', 'Curso cadastrado com sucesso!');
}

    /**
     * Exibir o formulário para editar um curso.
     */
    public function edit(Course $course)
    {

        return view('courses.edit', ['course' => $course]);
    }

    /**
     * Atualizar as informações de um curso.
     */
public function update(Request $request, Course $course)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
    ]);

    $course->update([
        'name' => $request->name,
        'price' => $request->price,
    ]);

    return redirect()->route('courses.index')
        ->with('success', 'Curso atualizado com sucesso!');
}
    /**
     * Excluir um curso.
     */
    public function destroy(Course $course)
    {
        //eccluir o registro do banco de dados
        $course->delete();
        //redirecionar o usuário para a lista de cursos
        return redirect()->route('courses.index')->with('success', 'Curso excluído com sucesso!');
    }
}
