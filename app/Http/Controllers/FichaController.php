<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;

class FichaController extends Controller
{
    public function index() {
        $ficha = ficha::all();
        return view('ficha.index',compact('ficha',));
    }
    public function create() {
        return view('ficha.create');
    }
    public function store(Request $request ) {
        $ficha=ficha::create($request->all());
        return redirect()->route('ficha.index');
    }
}
