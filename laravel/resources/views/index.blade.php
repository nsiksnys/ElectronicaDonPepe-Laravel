@extends('layouts.esqueleto')
@section('content')
<div class="page-header">
	<h2>Elija la accion a realizar</h2>
	<b> Ventas
		<ul>
			<li>
				<a href="{!!URL::to('/venta/alta')!!}">Alta</a>
			</li>
			<li>
				<a href="{!!URL::to('/venta/consulta')!!}">Consulta</a>
			</li>
		</ul> Comisiones y Premios
		<ul>
			<li>
				<a href="{!!URL::to('/adicional/reporte')!!}">Obtener reporte</a>
			</li>
			<li>
				<a href="{!!URL::to('/adicional/campania')!!}">Administrar campanias</a>
			</li>
			<li>
				<a href="{!!URL::to('/adicional/modificar')!!}">Actualizar Montos</a>
			</li>
		</ul>
		<a href="{!!URL::to('/admin')!!}">Administrar usuarios</a>
	</b>
</div>