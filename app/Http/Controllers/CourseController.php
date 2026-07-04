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

        return view('courses.index', ['courses'=>$courses]);
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
        return view('courses.show',['course'=>$course]);
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
        // dd($request->name);
         Course::create([
            'name'=>$request->name
         ]);
         //redirecione o  usuário,  enviar a mensagem de sucesso.
          return redirect()->route('courses.create')->with('success', 'Curso cadastrado com sucesso!');

    }

    /**
     * Exibir o formulário para editar um curso.
     */
    public function edit(Course $course)
    {

        return view('courses.edit', ['course'=>$course]);
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
