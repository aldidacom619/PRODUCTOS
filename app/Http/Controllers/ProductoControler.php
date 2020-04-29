<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoControler extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function listar()
    {
    	$datos = array('id' => 0,'tipo'=> 'COMPUTACION','descripcion'=>'MONITOR');
    	return view('productos.listar');
    }
    public function crear()
    {
    	return view('productos.crear');	
    }
    public function guardar(Request $request)
    {
    	return $request->txtTipo." ".$request->txtDescripcion;
    }
    public function editar($id)
    {
		return view('productos.editar',['id_prod'=> $id]);    	    		
    }
    public function modificar($id, Request $request)
    {
    	return redirect('/productos');
    }
    public function eliminar($id)
    {
    	echo "ELIMINAR ID PRODUCTO: ".$id;	
    }
}
