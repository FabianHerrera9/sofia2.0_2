<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PFormacion;

class ProgramaController extends Controller
{
    public function index() {
        $programa = programa::all();
        return view('programa.index',compact('programa'));
    }
    public function create() {
        return view('programa.create');
    }
    public function store(Request $request ) {
        $programa =programa::create($request->all());
        return redirect()->route('programa.index');
    }
}
