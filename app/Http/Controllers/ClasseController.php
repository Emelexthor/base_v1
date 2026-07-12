<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClasseRequest;
use App\Models\Classe;
use App\Models\Course;

class ClasseController extends Controller
{
    public function index(Course $course)
    {
        $classes = Classe::with('course')
            ->where('course_id', $course->id)
            ->orderBy('order_classe')
            ->get();

        return view('classes.index', [
            'course' => $course,
            'classes' => $classes,
        ]);
    }

    public function create(Course $course)
    {
        return view('classes.create', [
            'course' => $course,
        ]);
    }

    public function store(ClasseRequest $request)
    {
        $data = $request->validated();

        // Recupera a última ordem da aula no curso
        $lastOrderClasse = Classe::where('course_id', $data['course_id'])
            ->orderBy('order_classe', 'DESC')
            ->first();

        // Salva a nova aula
        Classe::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'order_classe' => $lastOrderClasse
                ? $lastOrderClasse->order_classe + 1
                : 1,
            'course_id' => $data['course_id'],
        ]);

        return redirect()
            ->route('classe.index', ['course' => $data['course_id']])
            ->with('success', 'Aula cadastrada com sucesso!');
    }
}
