		@extends('layout.principal')
		@section('miolo')
		<p>&nbsp;</p>
		<h2>Módulo Setores</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				<a href="#" class="list-group-item active">Lista de Servidores</a>
				<div class="list-group-item">
					Acesso aos servidores</span>
				</div>
			<div id="accordion">
			<h3><span class="glyphicon glyphicon-tasks"></span> Listagem </h3>
				<div class="list-group-item">
					<p class="list-group-item-text">
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
					</p>
				</div>
			</div> <!-- Accordion -->
			<a class="list-group-item active">Itens</a>
			</div> <!-- list-group -->
			<a href="/inicio" class="btn btn-primary" role="button">Início</a>
			<button type="button" class="btn btn-default">
				Administrar seção
			</button>
		</div>
	</div>
</div>
		@stop