<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PFormacion;

class ProgramaController extends Controller
{
    public function index() {
        $programa = PFormacion::paginate('5');
        return view('programa.index',compact('programa'));
    }
    public function create() {
        return view('programa.create');
    }
    public function store(Request $request ) {
        $programa =PFormacion::create($request->all());
        return redirect()->route('programa.index');
    }
    public function edit($id){
        $programa=PFormacion::find($id);
        return view('programa.edit',compact('programa'));
    }
    public function update(Request $request, $id){
        $programa=PFormacion::find($id)->update($request->all());
        return redirect()->route('programa.index');
    }
}
