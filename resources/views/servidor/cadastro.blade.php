		@extends('layout.principal')
		@section('miolo')
		<script>
			$('[checked="checked"]').parent().addClass("active");
		</script>
<div class="container-fluid">
		&nbsp;
		<h2>Módulo Cadastrar Servidor</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				<a href="#" class="list-group-item active">Cadastrar Servidor</a>
				<div class="list-group-item">
					Formulário</span>
				</div>
		<div id="accordion">
			<h3><span class="glyphicon glyphicon-tasks"></span> Abrir formulário </h3>
				<div class="list-group-item">
					<p class="list-group-item-text">
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
						<!-- Fim da descrição da lotação -->
						<div class="form-group">
						<label>Instituto vinculado</label>
						<br/>
						<select class="selectpicker" data-style="btn-primary">
						@foreach($instituto as $ins)
						<option name="{{ $ins->idunidade }}">{{ $ins->inome }} </option>
						@endforeach
						</select>
						</div>
						&nbsp;
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
					</p>
				</div>
		</div>
				<div class="list-group-item">
				</div> <a class="list-group-item active"><span class="badge">13 itens</span>Itens</a>
			</div>
			<a href="/servidores/iniciar" class="btn btn-primary" role="button">Voltar</a>
			<button type="button" class="btn btn-default">
				Administrar seção
			</button>
		</div>
	</div>
</div>
@stop