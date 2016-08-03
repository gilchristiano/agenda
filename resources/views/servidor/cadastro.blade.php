		@extends('layout.principal')
		@section('miolo')
		<script>
			$('[checked="checked"]').parent().addClass("active");
		</script>
		<h1>Cadastrar novo Servidor</h1>
		<form action="/servidores/adicionar" method="post">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<div class="form-group">
			<label>Nome</label>
			<input name="nome" class="form-control">
			</div>
			<div class="form-group">
			<label>Sobrenome</label>
			<input name="sobrenome" class="form-control">
			</div>
			<div class="form-group">
			<label>SIAPE</label>
			<input name="siape" type="number" class="form-control">
			</div>
			<!-- Lotação TAE ou EBTT -->
			<div class="input-group">
				<span class="input-group-addon beautiful">
					<input type="checkbox" name="lotacao" value="EBTT">
				</span>
			<input type="text" class="form-control" value="EBTT">
			<p></p>
				<span class="input-group-addon beautiful">
					<input type="checkbox" name="lotacao" value="TAE">
				</span>
			<input type="text" class="form-control" value="TAE">
			</div>
			<!-- Fim da seção para lotação -->
			<!-- Descrição da lotação -->
			<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon beautiful">
					<input type="checkbox" name="desc_lotacao" value="Docente (Poder Executivo)">
				</span>
			<input type="text" class="form-control" value="Docente (Poder Executivo)">
			<p></p>
				<span class="input-group-addon beautiful">
					<input type="checkbox" name="desc_lotacao" value="Técnico Administrativo (Poder Executivo)">
				</span>
			<input type="text" class="form-control" value="Técnico Administrativo (Poder Executivo)">
			</div>
			</div>
			<!-- Fim da descrição da lotação -->
			<div class="form-group">
			<label>Cargo</label>
			<input name="cargo" class="form-control">
			</div>
			<div class="form-group">
			<label>Data de Nascimento</label>
			<input name="datanascimento" type="date" class="form-control">
			</div>
			<div class="form-group">
			<label>Data de posse</label>
			<input name="entrada" type="date" class="form-control">
			</div>
			<div class="form-group">
			<label>Data de saída do cargo</label>
			<input name="saida" type="date" class="form-control">
			</div>
			<div class="form-group">
			<label>Observações</label>
			<input name="observacoes" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
			</form>
		<a href="/">Início</a>
@stop