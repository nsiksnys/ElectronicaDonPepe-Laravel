@extends('layouts.esqueleto')
@section('content')
<div class="page-header">
	<h3>Productos existentes</h3>
	<table class="table">
		<thead>
			<tr>
				<td><center>Id</center></td>
				<td><center>Nombre</center></td>
				<td><center>Precio Unitario</center></td>
			</tr>
		</thead>
		<tbody>
			@if($productos->count() != 0)
				@foreach($productos as $item)
					<tr>
						<td><center>{{ $item->id }}</center></td>
						<td><center>{{ $item->nombre }}</center></td>
						<td><center>{{ $item->precioUnitario }}$</center></td>
					</tr>
				@endforeach
			@else
				<tr>
					<td colspan="3">
						Lista vacia!
					</td>
				</tr>
			@endif
		</tbody>
	</table>
</div>