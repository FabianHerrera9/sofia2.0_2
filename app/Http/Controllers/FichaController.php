<?php

namespace App\Http\Controllers;

use App\Models\PFormacion;
use Illuminate\Http\Request;
use App\Models\Ficha;

class FichaController extends Controller
{
    public function index(Request $request)
    {
        $Buscar = $request->get('Buscar');
        $programa = PFormacion::all();
        $fichas = PFormacion::join('fichas','fichas.idPformacion','=','programasdeformacion.codigo')
            ->select('*')
            ->where('programasdeformacion.PFormacion','LIKE','%'.$Buscar.'%')
            ->get();
        $activas=Ficha::all()->where('estado','==','Activo');
        return view('ficha.index', compact('fichas','Buscar','programa','activas'));
    }

    public function indexinactive(Request $request)
    {
        $Buscar = $request->get('Buscar');
        $fichas = Ficha::all()->where('estado', '==', 'Inactivo');
        $programa = PFormacion::all();
        return view('ficha.index', compact('fichas', 'Buscar','programa'));
    }

    public function indexactiva(Request $request)
    {
        $Buscar = $request->get('Buscar');
        $fichas = Ficha::all()->where('estado', '=x=', 'Activo');
        $programa = PFormacion::all();
        return view('ficha.index', compact('fichas', 'Buscar','programa'));
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


}
