		@extends('layout.principal')
		@section('miolo')
		<h1>Servidores Lotados em cada Setor</h1>
		<table class="table table-striped table-bordered table-hover">
		@foreach($servidor as $p)
		<tr class="danger">
			<td width="30%">Nome: </td>
			<td width="70%">{{ $p->s.nome.' '.$p->s.sobrenome }}</td>
		</tr>
		<tr>
			<td width="30%">Matrícula SIAPE: </td>
			<td width="70%">{{ $p->s.siape }}</td>
		</tr>
		<tr class="danger">
			<td width="30%">Instituto: </td>
			<td width="70%">{{ $p->i.nome." (".$p->i.sigla.") " }}</td>
		</tr>
		<tr>
			<td width="30%">Unidade:</td>
			<td width="70%">{{ $p->u.unidade }}</td>
		</tr>
		<tr class="danger">
			<td width="30%">Setor:</td>
			<td width="70%">{{ $p->st.nome." (".$p->st.sigla.") " }}</td>
		</tr>
		@endforeach
		</table>
		<a href="/">Início</a>
		@stop
