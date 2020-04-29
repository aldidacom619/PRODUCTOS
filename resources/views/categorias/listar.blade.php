@extends('layouts.admin')
@section('contenedor')
 
 	<h1>Lista categorias</h1>
 	<a href="{{route('categorias.create')}}">Nueva categoria</a>
 	<div class="card">
        
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              
              <th>DESCRIPCION</th>
              <th>OPCIONES</th>              
            </tr>
            </thead>
            <tbody>
            	<tr>
		 			<td>1</td>	
		 			<td>COMPUTACION</td>
		 			<td><a href="{{route('categorias.edit',10)}}">Editar</a>
		 			    <form action="{{route('categorias.destroy',1)}}" method="post">
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