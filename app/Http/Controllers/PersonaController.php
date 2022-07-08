<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Http\Requests\PersonaRequest;

class PersonaController extends Controller
{

    public function index()
    {
        return view('lista_personas')->with('datos', Persona::all());
    }


    public function delete($id)
    {
        Persona::destroy(array('id', $id));
        return redirect('/');
    }

    public function create()
    {
        return view('crear_persona');
    }

    public function store(PersonaRequest $req)
    {
        $req->validated();
        $persona = new Persona;
        $persona->cedula = $req->input('cedula');
        $persona->nombre = $req->input('nombre');
        $persona->email = $req->input('email');
        $persona->save();
        return redirect('/');
    }

    public function edit($id)
    {

        return view('edit_persona')->with('datos', Persona::find($id));
    }

    public function edit_submit(PersonaRequest $req, $id)
    {
        $req->validated();
        $persona = Persona::find($id);
        $persona->cedula = $req->input('cedula');
        $persona->nombre = $req->input('nombre');
        $persona->email = $req->input('email');
        $persona->save();
        return redirect('/');
    }
}
