<?php

namespace App\Http\Controllers;

use App\Models\PFormacion;
use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\FIcha;
use function GuzzleHttp\Promise\all;

class InstructorController extends Controller
{
    public function index() {
        $instructor = Instructor::all();
        $ficha = Ficha::all();
        return view('instructor.index',compact('instructor','ficha'));
    }
    public function create() {
        $ficha = Ficha::all();
        $programa=PFormacion::all();
        return view('instructor.create',compact('ficha','programa'));
    }
    public function store(Request $request ) {

        $instructor=Instructor::create($request->all());
        return redirect()->route('instructor.index');
    }
    public function edit($id){
        $instructor=Instructor::find($id);
        $ficha=FIcha::all();
        $programa=PFormacion::all();
        return view('instructor.edit',compact('instructor','ficha','programa'));
    }
    public function update (Request $request,$id){
        $instructor=Instructor::find($id)->update($request->all());
        return redirect()->route('instructor.index');
    }
    public function desactivar(Request $request, $estado){
        $instructor=Instructor::where('')
    }
}
