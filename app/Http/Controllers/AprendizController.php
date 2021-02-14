<?php

namespace App\Http\Controllers;

use App\Models\PFormacion;
use Illuminate\Http\Request;
use App\Models\Aprendiz;
use App\Models\FIcha;
use Symfony\Component\Translation\Loader\IcuDatFileLoader;
use function GuzzleHttp\Promise\all;

class AprendizController extends Controller
{
    public function index() {
        $aprendiz = Aprendiz::all();
        $ficha = Ficha::all();
        $programa=PFormacion::all();
        return view('aprendiz.index',compact('aprendiz','ficha','programa'));
    }
    public function create() {
        $ficha = Ficha::all();
        $programa = PFormacion::all();
        return view('aprendiz.create',compact('ficha','programa'));
    }
    public function store(Request $request ) {
        $aprendiz=Aprendiz::create($request->all());
        return redirect()->route('aprendiz.index');
    }
    public function edit($id){
        $aprendiz=Aprendiz::find($id);
        $programa=PFormacion::all();
        $ficha=FIcha::all();
        return view('aprendiz.edit',compact('aprendiz','programa','ficha'));
    }
    public function update (Request $request,$id){
        $aprendiz=Aprendiz::find($id)->update($request->all());
        return redirect()->route('aprendiz.index');
    }
    public function delete($id){
        $aprendiz=Aprendiz::find($id)->delete();
        return redirect()->route('aprendiz.index');
    }
}
