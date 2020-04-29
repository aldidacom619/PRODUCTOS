@extends('layouts.admin')
@section('contenedor')
 
 	<h1>Lista productos</h1>
 	<a href="{{route('crear_productos')}}">Nuevo producto</a>
 	<div class="card">
        
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>TIPO</th>
              <th>DESCRIPCION</th>
              <th>OPCIONES</th>
              
            </tr>
            </thead>
            <tbody>
            	<tr>
		 			<td>1</td>	
		 			<td>COMPUTACION</td>
		 			<td>MONITOR</td>
		 			<td><a href="{{route('editar_productos',1)}}">Editar</a>
		 			    <form action="{{route('eliminar_productos',1)}}" method="post">
		 			    	@csrf
		 			    	@Method('DELETE')
							<input type="submit" value="Eliminar"> 			    	
		 			    </form>
		 			</td>
		 		</tr>
            </tbody>	
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    
<!-- /.card --> 	 
 @endsection
 
