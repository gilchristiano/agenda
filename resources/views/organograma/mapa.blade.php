		@extends('layout.principal')
		@section('miolo')
		<div class="container-fluid">
		&nbsp;
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				<a href="#" class="list-group-item active">Organograma</a>
				<div class="list-group-item">
					Reitoria e Campi</span>
				</div>
			<div id="accordion">
			<h3><span class="glyphicon glyphicon-tasks"></span> Abrir organograma </h3>
				<div class="list-group-item">
					<p class="list-group-item-text">
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
						</table>
					@endforeach
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