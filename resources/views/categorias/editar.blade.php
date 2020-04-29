@extends('layouts.admin')
@section('contenedor')
<center>
	<h1>Nueva categoria</h1>
	<form action="{{route('categorias.update',$id_cat)}}" method="POST"> 
		@csrf
		 @Method('PUT')
		<table border="0">
			
			<tr>
				<td><label for = "txtDescripcion">Descripcion Categoria:</label></td><td><input type="text" id="txtDescripcion" name="txtDescripcion" value="MUSICALES"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Guardar"></td>
			</tr>
		</table>
	</form>
</center>
 @endsection