@extends('layouts.admin')
@section('contenedor')
<center>
	<h1>Editar producto</h1>
	<form action="{{route('modificar_productos', $id_prod)}}" method="POST"> 
		@csrf
 	    @Method('PUT')
		<table border="0">
			<tr>
				<td><label for = "txtTipo">Tipo producto:</label></td><td><input type="text" id="txtTipo" name="txtTipo" value="COMPUTACION"></td>
			</tr>
			<tr>
				<td><label for = "txtDescripcion">Descripcion:</label></td><td><input type="text" id="txtDescripcion" name="txtDescripcion" value="MOUSE"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Editar"></td>
			</tr>
		</table>
	</form>
</center>
@endsection