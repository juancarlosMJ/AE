<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibreriaControl extends Controller
{
    public function index(){
        $libro = Libros::orderBy('id','asc')->paginate();
        return view('libros.index', compact('libro'));
    }
    public function mostrar(Libros $libro){
        return view ('libros.mostrar', compact('libro'));
    }
    public function eliminar(Libros $libro){
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
