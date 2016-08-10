		@extends('layout.principal')
		@section('miolo')
		<p>&nbsp;</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3>
						Ambientes de Gestão e Relatórios
					</h3>
				</div>
			</div>
			<p>&nbsp;</p>
			<div class="row" align="center">
				<div class="col-md-2">
					<a href="/organograma" target="_self">
					<button type="button" class="btn btn-primary">
						Organograma
					</button>
					</a>
				</div>
				<div class="col-md-2">
					<a href="/servidores/cadastrar" target="_self">
					<button type="button" class="btn btn-primary">
						Gestão de Servidores
					</button>
					</a>
				</div>
				<div class="col-md-3">
					<button type="button" class="btn btn-primary">
						Controle de Eventos
					</button>
				</div>
				<div class="col-md-3">
					 
					<button type="button" class="btn btn-primary">
						Controle de Saídas para Capacitação
					</button>
				</div>
				<div class="col-md-2">
					 
					<button type="button" class="btn btn-primary">
						Relatórios
					</button>
				</div>
			</div>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div class="row">
				<div class="col-md-12">
					<address>
						 <strong></strong>
					</address>
				</div>
			</div>
		</div>
		@stop