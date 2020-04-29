@extends('layouts.admin')
@section('contenedor')
<center>
	<h1>Nuevo producto</h1>
	<form action="{{route('guardar_productos')}}" method="POST"> 
		@csrf
		<table border="0">
			<tr>
				<td><label for = "txtTipo">Tipo producto:</label></td><td><input type="text" id="txtTipo" name="txtTipo"></td>
			</tr>
			<tr>
				<td><label for = "txtDescripcion">Descripcion:</label></td><td><input type="text" id="txtDescripcion" name="txtDescripcion"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Guardar"></td>
			</tr>
		</table>
	</form>
</center>
 @endsection