<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendiz;
use App\Models\FIcha;

class AprendizController extends Controller
{
    public function index() {
        $aprendiz = Aprendiz::all();
        $ficha = Ficha::all();
        return view('aprendiz.index',compact('aprendiz','ficha'));
    }
    public function create() {
        $ficha = Ficha::all();
        return view('aprendiz.create',compact('ficha'));
    }
    public function store(Request $request ) {
        $aprendiz=Aprendiz::create($request->all());
        return redirect()->route('aprendiz.index');
    }
    public function edit($id){
        $aprendiz=Aprendiz::find($id);
        return view('aprendiz.edit',compact('aprendiz'));
    }
    public function update (Request $request,$id){
        $aprendiz=Aprendiz::find($id)->update($request->all());
        return redirect()->route('aprendiz.index');
    }
}
