		@extends('layout.principal')
		@section('miolo')
		<h1>Organograma por Lista de Setores</h1>
		<p>&nbsp;</p>
		<a href="/organograma" class="btn btn-primary" role="button">Voltar</a>
		@foreach($setor as $st)
		<table class="table table-striped table-bordered table-hover">
		<tr>
			<td width="20%">Instituto: </td>
			<td width="70%">{{ $st->inome }}</td>
			<td width="5%"></td>
			<td width="5%"></td>
		</tr>
		<tr>
			<td width="20%">Setor: </td>
			<td width="70%">{{ $st->stnome }}</td>
			<td width="5%" align="center"><a href="/servidores/<?= $st->idinstituto ?>/<?= $st->idunidade ?>/<?= $st->idSetor ?>"><span class="glyphicon glyphicon-list-alt"></span></a></td>
			<td width="5%" align="center"><a href="/setor/<?= $st->idinstituto ?>/<?= $st->idunidade ?>/<?= $st->idSetor ?>" title="Cadastrar servidor para este setor"><span class="glyphicon glyphicon-star"></span></a></td>
			</tr>
		</p>
		</table>
		@endforeach
		@stop