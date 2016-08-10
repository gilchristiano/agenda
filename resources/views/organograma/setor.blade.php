		@extends('layout.principal')
		@section('miolo')
		<h1>Organograma por Lista de Setores</h1>
		<p>&nbsp;</p>
		<a href="/organograma" class="btn btn-primary" role="button">Voltar</a>
		@foreach($setor as $st)
		<table class="table table-striped table-bordered table-hover">
		<tr>
			<td width="20%">Instituto: </td>
			<td width="60%">{{ $st->inome }}</td>
			<td width="10%"></td>
			<td width="10%"></td>
		</tr>
		<tr>
			<td width="20%">Setor: </td>
			<td width="60%">{{ $st->stnome }}</td>
			<td width="10%" align="center"><a href="/servidores/<?= $st->idinstituto ?>/<?= $st->idunidade ?>/<?= $st->idSetor ?>" class="btn btn-primary" role="button" title="Visualizar">Visualizar</a></td>
			<td width="10%" align="center"><a href="/setor/<?= $st->idinstituto ?>/<?= $st->idunidade ?>/<?= $st->idSetor ?>" class="btn btn-primary" role="button" title="Cadastrar servidor para este setor">Cadastrar</a>
			</span></a></td>
			</tr>
		</p>
		</table>
		@endforeach
		<h3>{{ $st->inome }} </h3>
		@stop