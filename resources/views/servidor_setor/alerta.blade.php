		@extends('layout.principal')
		@section('miolo')
		<p>&nbsp;</p>
		<div class="alert alert-success">
			<strong>Atenção!</strong>O servidor {{ $Confirmar->snome }} {{ $Confirmar->sobrenome }} já se encontra cadastrado no setor {{ $consulta->stnome }}!
		</div>
		@stop