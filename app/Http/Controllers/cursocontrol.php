<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;//validaciones
use Illuminate\Support\Str;

class cursocontrol extends Controller
{
    public function index(){
      // $cursos = curso::all();//traer todos los cursos
        $cursos = curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){

        return view('cursos.crear');
    }
    public function store(StoreCurso $formulario){
       /* $curso = new curso();
        $curso->name = $formulario->name;
        $curso->description = $formulario->description;
        $curso->categoria = $formulario->categoria;
        $curso->save();
        //return $formulario->all();*/
        $formulario->slup = Str::slug($formulario->name, '-');
        $curso=curso::create($formulario->all() );
        
        return redirect()->route('cursos.show', $curso);
    }
  
    public function show(curso $curso, $nivel=null){
        
        return view('cursos.show', compact('curso', 'nivel'));
    }

    public function edit(curso $curso){
        return view('cursos.edit', compact('curso'));
    }
    public function update(Request $formulario, curso $curso){
        $formulario->validate([
            'name' => 'required|max:100',
            'categoria' => 'required|min:10',
            'description' => 'required'
        ]);
       /* $curso->name = $formulario->name;
        $curso->description = $formulario->description;
        $curso->categoria = $formulario->categoria;
        $curso->save();  */
        $curso ->update($formulario->all());
        return redirect()->route('cursos.show', $curso);        
    }

    public function destroy(curso $curso){
        $curso ->delete();
        return redirect()->route('cursos.index', $curso);
    }
}
