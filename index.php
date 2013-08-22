<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>SIGMA ANDROID</title>
	
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="plugins/bxslider/jquery.bxslider.min.js"></script>
	<link href="plugins/bxslider/jquery.bxslider.css" rel="stylesheet">
	
	<link rel="stylesheet" href="plugins/forkit/demo.css">
	<link rel="stylesheet" href="plugins/forkit/forkit.css">
</head>
<body>
<div id="container">
	<div id="content">	
		
		<!-- The contents (if there's no contents the ribbon acts as a link) -->
		<div class="forkit-curtain">
			<div class="close-button"></div>
			<h2>Aplicativos Mobile</h2>
			<img class="forkit-img" src="img/header/logo.png" width="200">
			<img class="forkit-img" src="img/footer/redeindustrial.png">
			<img class="forkit-img" src="img/header/logo.png" width="200">
			<img class="forkit-img" src="img/footer/redeindustrial.png">
		</div>

		<!-- The ribbon -->
		<a class="forkit" data-text="Mais apps" data-text-detached="Arraste-me >" href="plugins/forkit/forkit.js"></a>

		<script src="plugins/forkit/forkit.js"></script>
		
		<!-- Cabeçalho -->
		<?php require_once 'header.php';?>
		
		<!-- Conteúdo -->
		<!-- Banner em flash -->
		<object width="1000" height="550" id="img_content" >
                    <param name="movie" value="swf/home.swf"></param>
                    <param name="allowFullScreen" value="true"></param>
                    <param name="allowscriptaccess" value="always"></param>
                    <embed src="swf/home.swf" type="application/x-shockwave-flash" width="1000" height="550" allowscriptaccess="always" allowfullscreen="true"></embed>
		</object>
		<!-- Cadastro/Download -->
		<a id="download" href="cadastro.php"></a>
		
		<!-- Slider 
		<div id="slider">
			<ul class="bxslider">
				<li><img src="img/home/slider-capa/azul-claro-teste.png" width="950" height="350" style="border: 0;"></li>
				<li><img src="img/home/slider-capa/teste-azul-escuro.png" width="950" height="350" style="border: 0;"></li>
				<li><img src="img/home/slider-capa/teste3.png" width="950" height="350" style="border: 0;"></li>
				<li><img src="img/home/slider-capa/teste4.png" width="950" height="350" style="border: 0;"></li>
				<li><img src="img/home/slider-capa/teste5.png" width="950" height="350" style="border: 0;"></li>
				<li><img src="img/home/slider-capa/teste6.png" width="950" height="350" style="border: 0;"></li>
				<li><img src="img/home/slider-capa/teste7.png" width="950" height="350" style="border: 0;"></li>
				<li><img src="img/home/slider-capa/teste8.png" width="950" height="350" style="border: 0;"></li>
			</ul>	
		</div>
		-->
		
		<div id="apresentacao">
			<div id="oquee">
				<h1>SIGMA ANDROID</h1>
				
				<p>SIGMA, o software de manutenção mais usado no Brasil, agora em versão para tablet e smartphone ANDROID.</p>
				<p>Com o SIGMA ANDROID, a Rede Industrial passa a oferecer a seus clientes aplicativos SIGMA, desenvolvidos em JAVA para uso em tablets e smartphones, no sistema operacional mais popular do mundo para estes aparelhos: o sistema ANDROID, desenvolvido pelo Google.</p>
				<p>Assim, a Rede Industrial marca o início de uma Nova Geração para o PCM – Planejamento e Controle da Manutenção – em todo Brasil, tendo em vista seu ineditismo e as características modernas de gestão do PCM.</p>
				<p>Os Recursos da geração ANDROID são incomparáveis. Portabilidade e automação de serviços do PCM são a marca forte da nova geração SIGMA ANDROID.</p>
							
			</div>
			<div id="recursos">
				<h1>Recursos</h1>
				
				<p>A versão 1.0 que já está disponível para download possibilita abertura e consulta de solicitações de serviço, bem como aprovação e reprovação de Solicitações de Serviço pelos mantenedores.</p> 
				<p>Veja abaixo o cronograma completo de lançamento de próximas versões:</p>

				<ul>
					<li><b>Versão 2.0 - Previsão de lançamento - Outubro/2013</b>
						<ul>
							<li>OS – Ordens de serviço - Abertura e consulta de ordens de serviço para manutenção corretiva.</li>
							<li>HH – Homem hora - lançamento de horas trabalhadas em tempo real e lançamento de horas retroativas.</li>
							<li>Início e término de solicitação de serviço com opção de cronometragem de tempo gasto.</li>
							<li>Informações gerenciais (Relátórios e Gráficos).</li>
							<li>Indicadores e KPI’s (MTTR, MTBF, Gráficos Indicadores, etc...).</li>
						</ul>
					</li>
					<li><b>Versão 3.0 - Previsão de lançamento - Janeiro/2014</b>
						<ul>
							<li>Lançamentos Avançados (Cadastro de intervenções, parada de máquina, etc...).</li>
							<li>Cadastro e consulta de ficha técnica.</li>
							<li>Indicadores de máquinas (MTBF, MTTR).</li>
							<li>Retorno do status dos itens da preventiva.</li>
						</ul>
					</li>
					<li><b>Versão 4.0 - Previsão de lançamento - Abril/2014</b>
						<ul>
							<li>Consulta de histórico de máquina.</li>
							<li>Relatórios Avançados e Gráficos</li>
							<li>Edição de ficha técnica</li>
							<li>Consulta de funcionários em tempo real</li>
							<li>Gerar saída de peças</li>
						</ul>
					</li>
				</ul>			
			</div>
		</div>
		
	</div>
	<!-- Rodapé -->
	<?php require_once 'footer.php';?>
</div>

<script>
$(document).ready(function(){
	//Slider
	$('.bxslider').bxSlider({
		slideWidth: 950,
		slideMargin: 5,
		mode: 'horizontal',
		tickerHover: true,
		autoHover: true,
		responsive: false,
		touchEnabled: true,
		controls: false,
		autoControls: true,
		auto: true,
		adaptiveHeight: false,
		pager: true,
		minSlides: 1,
		maxSlides: 1
	});
});
</script>

</body>
</html>