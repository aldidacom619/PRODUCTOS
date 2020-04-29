<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // es necesario importar 

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//$categoria =  DB::select('SELECT * FROM categorias where descripcion=? LIMIT 0,1', ['MEDICAMENTOS']);

    	//$categoria = DB::table('categorias')->select('id')->take(1)->get();

    	//$categoria = DB::table('categorias')->select('id')->first();

    	/*$categoria = DB::table('categorias')
    	   ->select('id')
    	   ->where(['descripcion' => 'MEDICAMENTOS'])
    	   ->first();

    	$categoria = DB::table('categorias')
    	   ->where(['descripcion' => 'MEDICAMENTOS'])
    	   ->value('id');

		$categoria = DB::table('categorias')->whereDescripcion('MEDICAMENTOS')->value('id');*/

    	//dd($categoria);
        DB::table('productos')->insert([
    		//'categoria_id'=>$categoria[0]->id,
    		'categoria_id'=>DB::table('categorias')->whereDescripcion('MEDICAMENTOS')->value('id'),
    		'nombre'=>'IMPRESORAs',
    		'precio'=>20,
    		'estado'=>'AC',
    	]);
    }
}
