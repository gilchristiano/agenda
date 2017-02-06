		@extends('layout.principal')
		@section('miolo')
<div class="container-fluid">
		&nbsp;
		<h2>Módulos de Gestão</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				 <a href="#" class="list-group-item active">Introdução</a>
				<div class="list-group-item">
					Módulos
				</div>
				<div class="list-group-item">
					<p class="list-group-item-text">
					<a href="/organograma" target="_self">
					<button type="button" class="btn btn-primary">
						Organograma
					</button>
					</a>
					<a href="/servidores/iniciar" target="_self">
					<button type="button" class="btn btn-primary">
						Servidores
					</button>
					</a>
					<button type="button" class="btn btn-primary">
						Eventos
					</button>
					<a href="/capacitacao/relatorio" target="_self">
					<button type="button" class="btn btn-primary">
						Capacitação
					</button>
					</a>
					
					
					
					</p>
				</div>
				<div class="list-group-item">
				</div> <a class="list-group-item active"><span class="badge">04 itens</span>Itens</a>
			</div>
			<div class="row">
				<div class="col-md-3">
					<button type="button" class="btn btn-default">
						Administrar módulos
					</button>
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
				</div>
			</div>
		</div>
	</div>
</div>
@stop