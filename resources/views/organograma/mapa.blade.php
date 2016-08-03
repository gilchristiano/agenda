		@extends('layout.principal')
		@section('miolo')
		<h1>Organograma por Unidades (Reitoria e Campi)</h1>
		<p>&nbsp;</p>
		@foreach($mapa as $m)
		<table class="table table-striped table-bordered table-hover">
		<tr>
			<td width="20%">Instituto: </td>
			<td width="75%">{{ $m->inome }}</td>
			<td width="5%"></td>
		</tr>
		<tr>
			<td width="20%">Sigla: </td>
			<td width="75%">{{ $m->isigla }}</td>
			<td width="5%"></td>
		</tr>
		<tr>
			<td width="20%">Unidade: </td>
			<td width="75%">{{ $m->unidade }}</td>
			<td width="5%" align="center"><a href="/setores/<?= $m->idinstituto ?>/<?= $m->idunidade ?>"><span class="glyphicon glyphicon-list-alt"></span></a></td>
		</tr>
		</p>
		</table>
		<p>&nbsp;</p>
		@endforeach
		<a href="/inicio">Início</a>
@stop