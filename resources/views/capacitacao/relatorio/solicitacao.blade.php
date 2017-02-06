		@extends('layout.principal')
		@section('miolo')
		<script>
			$('[checked="checked"]').parent().addClass("active");
		</script>
<div class="container-fluid">
		&nbsp;
		<h2>Módulo Relatório de Capacitação</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				<a href="#" class="list-group-item active">Registrar Qualificação</a>
				<div class="list-group-item">
					<h3>Formulário</h3></span>
				</div>
		<div id="accordion">
			<h3><span class="glyphicon glyphicon-tasks"></span> Abri formulário </h3>
				<div class="list-group-item">
					<p class="list-group-item-text">
					<form action="/servidores/adicionar" method="post">
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
						<div class="form-group">
						@foreach($informacoes as $dados)
							<h4><b>Nome:</b> {{ $dados->snome }} {{ $dados->sobrenome }} </h4>
							<h4><p><b>SIAPE:</b> {{ $dados->siape }} </p></h4>
							<h4><p><b>Quadro funcional:</b> {{ $dados->desc_lotacao }} ({{ $dados->lotacao }})</p></h4>
							<h4><p><b>Cargo:</b> {{ $dados->cargo }}</p></h4>
							<h4><p><b>Setor:</b> {{ $dados->stnome }} ({{ $dados->stsigla }})</p></h4>
							<h4><p><b>Origem: <i>{{ $dados->unidade }}</i></b></p></h4>
							<h4><p><b>{{ $dados->inome }} ({{ $dados->unome }})</b></p></h4>
						@endforeach
						</div>
						<br/>
						<form action="" method="post">
							<div class="form-group">
							<h4><label>Forma de capacitação</label></h4>
								<div class="radio">
								<label>
									<input type="radio" name="forma_de_capacitacao">
									<span style="text-align:left" class="input-group-addon">Aprendizagem em serviço</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="forma_de_capacitacao">
									<span style="text-align:left"  class="input-group-addon">Autoformação</span>
								</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="forma_de_capacitacao">
									<span style="text-align:left"  class="input-group-addon">Curso</span>
								</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="forma_de_capacitacao">
									<span style="text-align:left"  class="input-group-addon">Grupo formal de estudo</span> 
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="forma_de_capacitacao">
									<span style="text-align:left"  class="input-group-addon">Intercâmbio</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="forma_de_capacitacao">
									<span style="text-align:left"  class="input-group-addon">Oficina de trabalho / Workshop</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="forma_de_capacitacao">
									<span style="text-align:left"  class="input-group-addon">Palestra</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="forma_de_capacitacao">
									<span style="text-align:left"  class="input-group-addon">Seminário ou Congresso ou Conferência ou Fórum ou Encontro</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="forma_de_capacitacao">
									<span style="text-align:left"  class="input-group-addon">Treinamento em serviço</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="forma_de_capacitacao">
									<span style="text-align:left"  class="input-group-addon">Visita técnica</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="forma_de_capacitacao">
									<span style="text-align:left"  class="input-group-addon">Estágio</span>
								</label>
								</div>
								<div class="input-group">
									<input type="text" required="required" size="50" class="form-control" name="outros" placeholder="Digite outra forma de capacitação">
								</div>
								<p>&nbsp;</p>
								<h4><label>Instituição que ofertou o curso</label></h4>
								<input type="text" required="required" size="30" class="form-control" name="instituicaoQueOfertou" placeholder="Digite o nome da instituição">
								<div>
								<p>&nbsp;</p>
								<h4><label>Tipo de Instituição</label></h4>
								<div class="radio">
								<label>
									<input type="radio" name="tipoDeInstituicao">
									<span style="text-align:left" class="input-group-addon">Intituição Pública - Próprio órgão</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="tipoDeInstituicao">
									<span style="text-align:left"  class="input-group-addon">Intituição Pública - Outros</span>
								</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="tipoDeInstituicao">
									<span style="text-align:left"  class="input-group-addon">Escola de Governo</span>
								</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="tipoDeInstituicao">
									<span style="text-align:left"  class="input-group-addon">Instituição Privada</span> 
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="tipoDeInstituicao">
									<span style="text-align:left"  class="input-group-addon">Instituição Estrangeira Pública</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="tipoDeInstituicao">
									<span style="text-align:left"  class="input-group-addon">Intituição Estrangeira Privada</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="tipoDeInstituicao">
									<span style="text-align:left"  class="input-group-addon">Instituição não Governamental - Sem fins lucrativos</span>
								</label>
								</div>
								</div>
								<p>&nbsp;</p>
								<h4><label>Instrutor</label></h4>
								<div>Informe se o instrutor do curso foi do IFBaiano</div>
								<div class="radio">
								<label>
									<input type="radio" name="instrutor">
									<span style="text-align:left" class="input-group-addon">Interno</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="instrutor">
									<span style="text-align:left"  class="input-group-addon">Externo</span>
								</label>
								</div>
								<p>&nbsp;</p>
								<h4><label>Local do Evento</label></h4>
								<div class="radio">
								<label>
									<input type="radio" name="localDoEvento">
									<span style="text-align:left" class="input-group-addon">Na cidade de trabalho do servidor</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="localDoEvento">
									<span style="text-align:left"  class="input-group-addon">Em outra cidade do Brasil</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="localDoEvento">
									<span style="text-align:left"  class="input-group-addon">Em outro país</span>
								</label>
								</div>
								<p>&nbsp;</p>
								<h4><label>Mês de realização do evento</label></h4>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left" class="input-group-addon">Janeiro</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left"  class="input-group-addon">Fevereiro</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left"  class="input-group-addon">Março</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left"  class="input-group-addon">Abril</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left"  class="input-group-addon">Maio</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left"  class="input-group-addon">Junho</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left"  class="input-group-addon">Julho</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left"  class="input-group-addon">Agosto</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left"  class="input-group-addon">Setembro</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left"  class="input-group-addon">Outubro</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left"  class="input-group-addon">Novembro</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="mesDeRealizacao">
									<span style="text-align:left"  class="input-group-addon">Dezembro</span>
								</label>
								</div>
								<p>&nbsp;</p>
								<h4><label>Carga horária</label></h4>
								<div class="input-group">
								<input name="cargaHoraria" class="form-control" size="30" required="required" pattern="[0-9]+$" placeholder="Digite somente números" >
								</div>
							<h4><label>Área temática</label></h4>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Agricultura, extrativismo e pesca">
									<span style="text-align:left" class="input-group-addon">Agricultura, extrativismo e pesca</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Auditoria">
									<span style="text-align:left"  class="input-group-addon">Auditoria</span>
								</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="areaTematica" value="Ciência e tecnologia">
									<span style="text-align:left"  class="input-group-addon">Ciência e tecnologia</span>
								</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="areaTematica" value=" Comunicação">
									<span style="text-align:left"  class="input-group-addon">Comunicação</span> 
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Defesa e segurança">
									<span style="text-align:left"  class="input-group-addon">Defesa e segurança</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Desenvolvimento Gerencial">
									<span style="text-align:left"  class="input-group-addon">Desenvolvimento Gerencial</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Desenvolvimento Regional">
									<span style="text-align:left"  class="input-group-addon">Desenvolvimento Regional</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Direito e Justiça">
									<span style="text-align:left"  class="input-group-addon">Direito e Justiça</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Economia, orçamento e finanças">
									<span style="text-align:left"  class="input-group-addon">Economia, orçamento e finanças</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Educação">
									<span style="text-align:left"  class="input-group-addon">Educação</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Ética">
									<span style="text-align:left"  class="input-group-addon">Ética</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Gestão da informação">
									<span style="text-align:left"  class="input-group-addon">Gestão da informação</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Gestão de pessoas">
									<span style="text-align:left"  class="input-group-addon">Gestão de pessoas</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Habitação, saneamento, urbanismo e trânsito">
									<span style="text-align:left"  class="input-group-addon">Habitação, saneamento, urbanismo e trânsito</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Indústria, comércio e serviços">
									<span style="text-align:left"  class="input-group-addon">Indústria, comércio e serviços</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Informática - Programação e tecnologia da informação">
									<span style="text-align:left"  class="input-group-addon">Informática - Programação e tecnologia da informação</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Informática - Sistemas informatizados do Governo Federal">
									<span style="text-align:left"  class="input-group-addon">Informática - Sistemas informatizados do Governo Federal</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Informática - Aplicativos e sistemas internos">
									<span style="text-align:left"  class="input-group-addon">Informática - Aplicativos e sistemas internos</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Logística">
									<span style="text-align:left"  class="input-group-addon">Logística</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Meio ambiente">
									<span style="text-align:left"  class="input-group-addon">Meio ambiente</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Pessoa, família e sociedade">
									<span style="text-align:left"  class="input-group-addon">Pessoa, família e sociedade</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Planejamento">
									<span style="text-align:left"  class="input-group-addon">Planejamento</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Relações internacionais">
									<span style="text-align:left"  class="input-group-addon">Relações internacionais</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Saúde">
									<span style="text-align:left"  class="input-group-addon">Saúde</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Trabalho">
									<span style="text-align:left"  class="input-group-addon">Trabalho</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Transportes">
									<span style="text-align:left"  class="input-group-addon">Transportes</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="areaTematica" value="Turismo, cultura, lazer e esporte">
									<span style="text-align:left"  class="input-group-addon">Turismo, cultura, lazer e esporte</span>
								</label>
								</div>
								<label>
									<span style="text-align:left"  class="input-group-addon">
									<input type="text" required="required" size="30" class="form-control" name="areaTematica" placeholder="Digite outra área temática">
									</span>
								</label>
								<h4><label>Finalidade da ação</label></h4>
								<div class="radio">
								<label>
									<input type="radio" name="finalidadeDaAcao" value="Ambientação">
									<span style="text-align:left" class="input-group-addon">Ambientação</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="finalidadeDaAcao" value="Introdutório">
									<span style="text-align:left" class="input-group-addon">Introdutório</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="finalidadeDaAcao" value="Formação">
									<span style="text-align:left" class="input-group-addon">Formação</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="finalidadeDaAcao" value="Comportamental">
									<span style="text-align:left" class="input-group-addon">Comportamental</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="finalidadeDaAcao" value="Estratégico">
									<span style="text-align:left" class="input-group-addon">Estratégico</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="finalidadeDaAcao" value="Gerencial">
									<span style="text-align:left" class="input-group-addon">Gerencial</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="finalidadeDaAcao" value="Técnico e Gerencial">
									<span style="text-align:left" class="input-group-addon">Técnico e Gerencial</span>
								</label>
								</div>
								<h4><label>Forma de Capacitação</label></h4>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Aprendizagem em serviço">
									<span style="text-align:left" class="input-group-addon">Aprendizagem em serviço</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Autoformação">
									<span style="text-align:left" class="input-group-addon">Autoformação</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Curso">
									<span style="text-align:left" class="input-group-addon">Curso</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Grupo Formal de Estudo">
									<span style="text-align:left" class="input-group-addon">Grupo Formal de Estudo</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Intercâmbio">
									<span style="text-align:left" class="input-group-addon">Intercâmbio</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Oficina de Trabalho/Workshop">
									<span style="text-align:left" class="input-group-addon">Oficina de Trabalho/Workshop</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Palestra">
									<span style="text-align:left" class="input-group-addon">Palestra</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Seminário">
									<span style="text-align:left" class="input-group-addon">Seminário</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Congresso">
									<span style="text-align:left" class="input-group-addon">Congresso</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Conferência">
									<span style="text-align:left" class="input-group-addon">Conferência</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Forum">
									<span style="text-align:left" class="input-group-addon">Forum</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Encontro">
									<span style="text-align:left" class="input-group-addon">Encontro</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Treinamento em Serviço">
									<span style="text-align:left" class="input-group-addon">Treinamento em Serviço</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Visita Técnica">
									<span style="text-align:left" class="input-group-addon">Visita Técnica</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="fomaDeCapacitacao" value="Estágio">
									<span style="text-align:left" class="input-group-addon">Estágio</span>
								</label>
								</div>
								<h4><label>Modalidade</label></h4>
								<div class="radio">
								<label>
									<input type="radio" name="modalidade" value="À Distância">
									<span style="text-align:left" class="input-group-addon">À Distância</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="modalidade" value="Presencial">
									<span style="text-align:left" class="input-group-addon">Presencial</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="modalidade" value="Semi-presencial">
									<span style="text-align:left" class="input-group-addon">Semi-presencial</span>
								</label>
								</div>
								<h4><label>Abrangência</label></h4>
								<div class="radio">
								<label>
									<input type="radio" name="abrangencia" value="Restrito para servidores">
									<span style="text-align:left" class="input-group-addon">Restrito para servidores</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="abrangencia" value="Evento Aberto">
									<span style="text-align:left" class="input-group-addon">Evento Aberto</span>
								</label>
								</div>
								<h4><label>Valor da inscrição</label></h4>
								<div class="input-group">
								<input name="valorDaInscricao" class="form-control" size="30" required="required" pattern="[0-9]+$" placeholder="Digite somente números" >
								</div>
								<h4><label>Valor da diária</label></h4>
								<div class="input-group">
								<input name="valorDaDiaria" class="form-control" size="30" required="required" pattern="[0-9]+$" placeholder="Digite somente números" >
								</div>
								<h4><label>Valor de transportes / passagens</label></h4>
								<div class="input-group">
								<input name="valorDeTransporte" class="form-control" size="30" required="required" pattern="[0-9]+$" placeholder="Digite somente números" >
								</div>
								<h4><label>Valor total</label></h4>
								<div class="input-group">
								<input name="valorTotal" class="form-control" size="30" required="required" pattern="[0-9]+$" placeholder="Digite somente números" >
								</div>
								<h4><label>Número do processo</label></h4>
								<div class="input-group">
								<input name="numeroDoProcesso" class="form-control" size="30" required="required" placeholder="Número SIGA" >
								</div>
								<h4><label>Apresentou certificados?</label></h4>
								<div class="radio">
								<label>
									<input type="radio" name="apresentouCertificado" value="SIM">
									<span style="text-align:left" class="input-group-addon">Sim</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="apresentouCertificado" value="NÃO">
									<span style="text-align:left" class="input-group-addon">Não</span>
								</label>
								</div>
								<h4><label>Relação com os objetivos estratégicos do setor/Ambiente organizacional</label></h4>
								<div class="radio">
								<label>
									<input type="radio" name="relacaoObjetivosDoSetor" value="SIM">
									<span style="text-align:left" class="input-group-addon">Sim</span>
								</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="relacaoObjetivosDoSetor" value="NÃO">
									<span style="text-align:left" class="input-group-addon">Não</span>
								</label>
								</div>
								<h4><label>Observações</label></h4>
								<div class="input-group">
								<input name="observacoes" class="form-control" size="256" required="required" placeholder="Caso necessário!" >
								</div>
								<p>&nbsp;</p>
						<button type="submit" class="btn btn-primary btn-block">Registrar</button>
						</h3>
					</form>
					</p>
					</div>
				<div class="list-group-item">
				<a class="list-group-item active"><span class="badge">Informações</span>Itens</a>
				</div>
			<div>
			<a href="/capacitacao/relatorio" class="btn btn-primary" role="button">Voltar</a>
			<button type="button" class="btn btn-default">
				Administrar seção
			</button>
			</div>
	</div>
</div>
@stop