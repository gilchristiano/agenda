		@extends('layout.principal')
		@section('miolo')
		<h1>Novo Servidor</h1>
		<form>
			<div class="form-group">
			<label>Nome</label>
			<input class="form-control">
			</div>
			<div class="form-group">
			<label>Sobrenome</label>
			<input class="form-control">
			</div>
			<div class="form-group">
			<label>SIAPE</label>
			<input type="number" class="form-control">
			</div>
			<div class="form-group">
			<label>Lotação</label>
			<input class="form-control">
			</div>
			<div class="form-group">
			<label>Descrição da lotação</label>
			<input class="form-control">
			</div>
			<div class="form-group">
			<label>Cargo</label>
			<input class="form-control">
			</div>
			<div class="form-group">
			<label>Data de Nascimento</label>
			<input type="date" class="form-control">
			</div>
			<div class="form-group">
			<label>Data de posse</label>
			<input type="date" class="form-control">
			</div>
			<div class="form-group">
			<label>Data de saída do cargo</label>
			<input type="date" class="form-control">
			</div>
			<div class="form-group">
			<label>Observações</label>
			<input class="form-control">
			</div>
		<a href="/">Início</a>
@stop