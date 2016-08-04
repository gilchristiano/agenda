<html>
	<html lang="pt-br">
<head>
	<title>SisCap - IFBaiano</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/custom.css">
	<link rel="stylesheet" href="/css/jquery-ui-1.12.0.custom/jquery-ui.css">
	<link rel="stylesheet" href="/css/jquery-ui-1.12.0.custom/jquery-ui.theme.css">
	<link rel="stylesheet" href="/css/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<script>
	$( function() {
	$( "#accordion" ).accordion({collapsible: true,  active: false });
	} );
	</script>
</head>
<body>
	<!-- IFBaiano Campus Santa Inês -->
	<!-- NGTI - Núcleo de Gestão da Tecnologia da Informação -->
	<!-- Governo Federal - Poder Executivo (2016) -->
</head>
	<body>
	<p>&nbsp;</p>
		<div class="container">
		<nav class="navbar navbar-default">
		<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand href="/organograma">
			Sistema de Controle de Eventos e Saídas para Capacitações
			</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="/organograma">Listagem</a></li>
			<li><a href="/inicio">Início</a></li>
		</ul>
		</div>
		</nav>
	@yield('miolo')
	<footer class="footer">
	<p>
		<span class="glyphicon glyphicon-cloud"> IFBaiano</span>
	</p>
	</footer>
		</div>
	</body>
</html>
