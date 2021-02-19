<?php

namespace App\Http\Controllers;

use App\Models\PFormacion;
use Illuminate\Http\Request;
use App\Models\Ficha;

class FichaController extends Controller
{
    public function index(Request $request)
    {
        $Buscar = trim($request->get('Buscar'));
        $inner = PFormacion::join('fichas', 'programasdeformacion.Codigo', '=', 'fichas.idPformacion')
            ->select('*')
            //->where('fichas.estado', '=', "Activo")
            ->get();
        $programa = PFormacion::select()
            ->where('PFormacion', 'LIKE', '%' . $Buscar . '%')
            ->get();
        $fichas = Ficha::select()
            ->where('Jornada', 'LIKE', '%' . $Buscar . '%')
            ->get();
        return view('ficha.index', compact('inner', 'Buscar', 'programa','fichas'));
    }

    public function create()
    {
        $programa = PFormacion::all();
        return view('ficha.create', compact('programa'));
    }

    public function store(Request $request)
    {
        $ficha = Ficha::create($request->all());
        return redirect()->route('ficha.index');
    }

    public function edit($id)
    {
        $ficha = Ficha::find($id);
        $programa = PFormacion::all();
        return view('ficha.edit', compact('ficha', 'programa'));
    }

    public function update(Request $request, $id)
    {
        $ficha = Ficha::find($id)->update($request->all());
        return redirect()->route('ficha.index');
    }

    public function indexinactive()
    {
        $fichas = Ficha::all()->where('estado', '==', 'Inactivo');
        $programa = PFormacion::all();
        return view('ficha.index', compact('fichas', 'programa'));
    }

}
