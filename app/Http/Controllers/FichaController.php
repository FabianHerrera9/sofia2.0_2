<?php

namespace App\Http\Controllers;

use App\Models\PFormacion;
use Illuminate\Http\Request;
use App\Models\Ficha;

class FichaController extends Controller
{
    public function index() {
        $fichas = Ficha::all()->where('estado','==','Activo');
        $programa = PFormacion::all();
        return view('ficha.index',compact('fichas','programa'));
    }
    public function create() {
        $programa = PFormacion::all();
        return view('ficha.create',compact('programa'));
    }
    public function store(Request $request ) {
        $ficha=Ficha::create($request->all());
        return redirect()->route('ficha.index');
    }
    public function edit($id){
        $ficha=Ficha::find($id);
        $programa=PFormacion::all();
        return view('ficha.edit',compact('ficha','programa'));
    }
    public function update (Request $request,$id){
        $ficha=Ficha::find($id)->update($request->all());
        return redirect()->route('ficha.index');
    }


}
