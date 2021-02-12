<?php

namespace App\Http\Controllers;

use App\Models\PFormacion;
use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\FIcha;

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
        $request->validate([

            'file'=>'required|image'

        ]);
        return redirect()->route('instructor.index');
    }
    public function edit($id){
        $instructor=Instructor::find($id);
        return view('instructor.edit',compact('instructor'));
    }
    public function update (Request $request,$id){
        $instructor=Instructor::find($id)->update($request->all());
        return redirect()->route('instructor.index');
    }
}
