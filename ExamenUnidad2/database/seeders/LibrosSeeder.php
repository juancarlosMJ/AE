<?php

namespace Database\Seeders;
use App\Models\Libros;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libros = new Libros();

        $libros->titulo="eso";
        $libros->autor="jhon bosthon";
        $libros->editorial="cheka";
        $libros->fecha_publicacion="1992-03-03";
        $libros->numero_pagina="500";
        
        $libros->save();

        $libros2= new Libros();
        
        $libros2->titulo="Harry potter";
        $libros2->autor="jhosn litrer";
        $libros2->editorial="trillas";
        $libros2->fecha_publicacion="2000-02-04";
        $libros2->numero_pagina="999";

        $libros2->save();
    }
}
