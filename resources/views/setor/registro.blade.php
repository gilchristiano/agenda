		@extends('layout.principal')
		@section('miolo')
		<p>&nbsp;</p>
		@foreach($setor as $st)
		<h2>Adicionar servidor no(a) {{ $st->stnome }} </h2>
		<table class="table table-striped table-bordered table-hover">
		<tr>
			<td width="30%">Instituto: </td>
			<td width="70%">{{ $st->inome }}</td>
		</tr>
		<tr>
			<td width="30%">Sigla: </td>
			<td width="70%">{{ $st->isigla }}</td>
		</tr>
		<tr>
			<td width="30%">Unidade: </td>
			<td width="70%">{{ $st->unidade }}</td>
		</tr>
		<tr>
			<td width="30%">Setor para lotação: </td>
			<td width="70%">{{ $st->stnome }}</td>
		</tr>
		<tr>
			<td width="30%">Sigla do Setor: </td>
			<td width="70%">{{ $st->stsigla }}</td>
		</tr>
		</p>
		</table>
		<p>&nbsp;</p>
		@endforeach
		<a href="/inicio">Início</a>
@stop