		@extends('layout.principal')
		@section('miolo')
<div class="container-fluid">
		&nbsp;
		<h2>Módulo Gestão de Servidores</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				 <a href="#" class="list-group-item active">Ambiente de Gestão de Informações</a>
				<div class="list-group-item">
					Funcionalidades
				</div>
				<div class="list-group-item">
					<p class="list-group-item-text">
					<button type="button" class="btn btn-primary">
						Visualizar
					</button>
					<button type="button" class="btn btn-primary">
						Alterar
					</button>
					<a href="/servidores/cadastrar" target="_self" title="Cadastrar servidor">
						<button type="button" class="btn btn-primary">
						Cadastrar
						</button>
					</a>
					<button type="button" class="btn btn-primary">
						Excluir
					</button>
					</p>
				</div>
				<div class="list-group-item">
				</div> <a class="list-group-item active"><span class="badge">04 itens</span>Itens</a>
			</div>
			<a href="/inicio" class="btn btn-primary" role="button">Voltar</a>
			<button type="button" class="btn btn-default">
				Administrar seção
			</button>
		</div>
	</div>
</div>
@stop