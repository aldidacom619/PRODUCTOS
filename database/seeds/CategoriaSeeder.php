<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // es necesario importar

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	

    	/*DB::table('categorias')->insert([
    		'descripcion'=>'COMPUTACION',
    		'estado'=>'AC'
    	]);

		DB::table('categorias')->insert([
    		'descripcion'=>'IMPRESION',
    		'estado'=>'AC'
    	]);*/

    	//DB::insert('INSERT INTO categorias (descripcion,estado)values("MEDICAMENTOS","AC")');
    	//DB::insert('INSERT INTO categorias (descripcion,estado)values(?,?)',['MEDICAMENTOS','AC']);
    	DB::insert('INSERT INTO categorias (descripcion,estado)values(:descripcion,:estado)',[
    		'descripcion'=> 'MEDICAMENTOS',
    		'estado' =>'AC',]);
    	

    }
}
