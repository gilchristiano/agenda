		@extends('layout.principal')
		@section('miolo')
		<h1>Servidores por Setor</h1>
		<p>&nbsp;</p>
		<a href="/organograma" class="btn btn-primary" role="button">Voltar</a>
		<p>&nbsp;</p>
		@foreach($servidor as $p)
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<td width="20%">Nome: </td>
				<td width="80%">
				{{ $p->snome." ".$p->sobrenome }}
				<!-- Inseri ícone de identificação Professor ou Técnico Administrativo -->
				@if($p->lotacao == 'EBTT')
					<span class='glyphicon glyphicon-tags' title='Professor'> </span> 
				@else
					<span class='glyphicon glyphicon-inbox' title='Técnico Administrativo'></span> 
				@endif
				</td>
			</tr>
			<tr>
				<td width="20%">Matrícula SIAPE: </td>
				<td width="80%"><?= $p->siape ?></td>
			</tr>
			<tr>
				<td width="20%">Instituto: </td>
				<td width="80%"><?= $p->inome." (".$p->isigla.") " ?></td>
			</tr>
			<tr>
				<td width="20%">Unidade:</td>
				<td width="80%"><?= $p->unidade ?></td>
			</tr>
			<tr>
				<td width="20%">Setor:</td>
				<td width="80%"><?= $p->stnome." (".$p->stsigla.") " ?></td>
			</tr>
			<tr>
				<td width="20%">Função:</td>
				<td width="80%"><?= $p->funcao ?></td>
			</tr>
			<tr>
				<td width="20%">Lotação:</td>
				<td width="80%"><?= " (".$p->lotacao.") ".$p->desc_lotacao ?></td>
			</tr>
		</table>
		<p>&nbsp;</p>
		@endforeach
		<!- Sobre os Glyphicons em http://glyphicons.bootstrapcheatsheets.com/ ->
		@stop