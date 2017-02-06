	@extends('layout.principal')
	@section('miolo')
	<p>&nbsp;</p>
	<h2>Módulo Capacitação</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				<a href="#" class="list-group-item active">Procedimentos</a>
			<div>
			<h4><span class="glyphicon glyphicon-tasks"></span> Acesso via Número SIAPE </h4>
				<div class="list-group-item">
					<p class="list-group-item-text">
					<form action="/capacitacao/registro" method="post">
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					<table class="table table-striped table-bordered table-hover">
					<tr>
						<td width="10%" style="text-align:center" >SIAPE</td>
						<td width="90%">
						<input name="siape" class="form-control" required="required" pattern="[0-9]+$" placeholder="Somente números" >
						</td>
					</tr>
					</p>
					</table>
						<input type="submit" class="btn btn-primary" value="Confirmar">
					</form>
					</p>
				</div>
			</div> <!-- list-group -->
			<br/>
			<a href="/inicio" class="btn btn-primary" role="button">Início</a>
			<button type="button" class="btn btn-default">
				Administrar seção
			</button>
		</div>
	</div>
</div>
@stop