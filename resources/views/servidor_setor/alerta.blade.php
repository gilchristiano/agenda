		@extends('layout.principal')
		@section('miolo')
		<p>&nbsp;</p>
		<div class="alert alert-success">
		@foreach($confirmar as $con)
			<strong>Atenção!</strong> <br/><br/> O servidor <em> {{ $con->snome }} {{ $con->sobrenome }} </em> já se encontra cadastrado no setor {{ $con->stnome }} !
		@endforeach
		</div>
		@stop