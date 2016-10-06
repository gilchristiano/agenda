		@extends('layout.principal')
		@section('miolo')
		<p>&nbsp;</p>
		<h2>Módulo Organograma</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				<a href="#" class="list-group-item active">Organograma por Setor</a>
				<div class="list-group-item">
					Acesso aos setores</span>
				</div>
			<div id="accordion">
			<h3><span class="glyphicon glyphicon-tasks"></span> Selecione os setores </h3>
				<div class="list-group-item">
					<p class="list-group-item-text">
					<p>&nbsp;</p>
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
							<td width="10%" align="center"><a href="/servidores/<?= $st->idinstituto ?>/<?= $st->idunidade ?>/<?= $st->idSetor ?>" class="btn btn-default" role="button" title="Visualizar">Visualizar</a></td>
							<td width="10%" align="center"><a href="/setor/<?= $st->idinstituto ?>/<?= $st->idunidade ?>/<?= $st->idSetor ?>" class="btn btn-default" role="button" title="Cadastrar servidor para este setor">Cadastrar</a>
							</span></a></td>
							</tr>
						</p>
						</table>
						@endforeach
						<h3>{{ $st->inome }} </h3>
					</p>
				</div>
			</div> <!-- Accordion -->
			<a class="list-group-item active">Itens</a>
			</div> <!-- list-group -->
			<a href="/inicio" class="btn btn-primary" role="button">Voltar</a>
			<button type="button" class="btn btn-default">
				Administrar seção
			</button>
		</div>
	</div>
</div>
@stop