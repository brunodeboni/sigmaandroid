<!DOCTYPE html>
<html>
<head>
<title>SIGMA ANDROID: Suporte</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/suporte.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
    <script type="text/javascript" src="plugins/bruno-slider/jquery.accessible-news-slider.js"></script>
    <link type="text/css" rel="stylesheet" href="plugins/bruno-slider/themes/base.css"/>
    <link type="text/css" rel="stylesheet" href="plugins/bruno-slider/themes/default/theme.css"/>
	<script type="text/javascript">
	// when the DOM is ready, convert the feed anchors into feed content
	$(document).ready(function() {
	
		$('#slider-passos').accessStories();
	
	});
	</script>
	
	<script src="plugins/bxslider/jquery.bxslider.min.js"></script>
	<link href="plugins/bxslider/jquery.bxslider.css" rel="stylesheet">
</head>
<body>
    <div id="container">
		<div id="content">
			<!-- Cabeçalho -->
			<?php require_once 'header.php';?>
	        
	        <!-- Conteúdo -->
	                               
                    <!-- Menu passo-a-passo -->
	        <div id="menu-passos">
	        	<div><a class="#passos-instalacao-site">Instalação pelo site</a></div>
	            <div><a class="#passos-instalacao-play">Instalação pela Play Store</a></div>
	            <div><a class="#passos-abertura-ss">Abertura de SS</a></div>
	            <div><a class="#passos-consulta-ss">Consulta de SS</a></div>
	        </div>
	        <div id="menu-selector"></div>
	        
	        
	      	<!-- Sliders passo-a-passo -->
	        <div id="passos-instalacao-site">  	
		        <ul class="bxslider1">
					<li><img src="img/conheca/instalacao-site/p1.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/instalacao-site/p2.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/instalacao-site/p3.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/instalacao-site/p4.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/instalacao-site/p5.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/instalacao-site/p6.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/instalacao-site/p7.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/instalacao-site/p8.png" width="950" height="405" style="border: 0;"></li>
				</ul>
			</div>
			<div id="passos-instalacao-play">  	
		        <ul class="bxslider2">
					<li><img src="img/conheca/instalacao-play/p1.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/instalacao-play/p2.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/instalacao-play/p3.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/instalacao-play/p4.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/instalacao-play/p5.png" width="950" height="405" style="border: 0;"></li>
				</ul>
			</div>
			<div id="passos-abertura-ss">	
		        <ul class="bxslider4">
					<li><img src="img/conheca/abertura-ss/p1.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/abertura-ss/p2.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/abertura-ss/p3.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/abertura-ss/p4.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/abertura-ss/p5.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/abertura-ss/p6.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/abertura-ss/p7.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/abertura-ss/p8.png" width="950" height="405" style="border: 0;"></li>
				</ul>
			</div>
			<div id="passos-consulta-ss">  	
		        <ul class="bxslider5">
					<li><img src="img/conheca/consulta-ss/p1.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/consulta-ss/p2.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/consulta-ss/p3.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/consulta-ss/p4.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/consulta-ss/p5.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/consulta-ss/p6.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/consulta-ss/p7.png" width="950" height="405" style="border: 0;"></li>
					<li><img src="img/conheca/consulta-ss/p8.png" width="950" height="405" style="border: 0;"></li>
				</ul>
			</div>
                        
                        <!-- Caixas de perguntas -->
                        <div id="boxes-wrapper">
				<div id="left-wrapper">
			        <!-- FAQ -->
			        <div id="faq">
			        	<div id="faq-title">Perguntas mais lidas</div>
			        	<div id="faq-content">
			        		<div class="faq-questions">
			        			<a href="faq.php#t1">O que devo fazer para começar a usar o aplicativo SIGMA Android?</a>
			        		</div>
			        		<div class="faq-questions">
			        			<a href="faq.php#t2">O que é sub-domínio?</a>
			        		</div>
			        		<div class="faq-questions">
			        			<a href="faq.php#t4">Quais as funcionalidades do SIGMA Android (Versão 1.0)?</a>
			        		</div>
			        		<div class="faq-questions">
			        			<a href="faq.php#t9">Qual a versão do Android compatível ao SIGMA Android?</a>
			        		</div>
			        		<div class="faq-questions">
			        			<a href="faq.php">Como faço para desvincular minha conta do Skype da minha conta da Microsoft?</a>
			        		</div>
			        		<div class="faq-questions">
			        			<a href="faq.php">Como faço para desvincular minha conta do Skype da minha conta da Microsoft?</a>
			        		</div>
			        		<div id="veja-mais"><a href="faq.php">Veja mais perguntas</a></div>
			        	</div>
			        </div>
			        <!-- Botões -->
			        <div id="botoes">
			        	<div id="ticket">
			        		<a href="http://redeindustrial.mysuite.com.br/clientlegume.php?param=hd_chat_gc_cad_chatdep&inf=&sl=rdi&lf=&ca=&cr=&redirect=http://redeindustrial.mysuite.com.br/empresas/rdi/central.php" target="_blank" class="btn">Abra um ticket de suporte</a>
			        	</div>
			        	<div id="chat">
			        		<a href="http://redeindustrial.mysuite.com.br/clientlegume.php?param=hd_chat_gc_cad_chatdep&inf=&sl=rdi&lf=&ca=&cr=&redirect=http://redeindustrial.mysuite.com.br/empresas/rdi/central.php" target="_blank" class="btn">Acesse o chat online</a>
			        	</div>
			        </div>
		        </div>
		        <div id="right-wrapper">
			        <!-- Baixar PDF -->
			        <div id="pdf-box">
			        	<table>
			        		<tr>
			        			<td>
			        				<a class="pdf" href="download/GUIA_DE_INSTALACAO_Download_via_site.pdf" target="_blank">
							        	<img src="img/suporte/pdf.png" width="20">
						        	</a>
			        			</td>
			        			<td>
			        				<a class="pdf" href="download/GUIA_DE_INSTALACAO_Download_via_site.pdf" target="_blank">
							        	<span>GUIA DE INSTALAÇÃO: Download via site</span>
						        	</a>
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>
			        				<a class="pdf" href="download/GUIA_DE_INSTALACAO_Download_via_Play_Store.pdf" target="_blank">
							        	<img src="img/suporte/pdf.png" width="20">
						        	</a>
			        			</td>
			        			<td>
			        				<a class="pdf" href="download/GUIA_DE_INSTALACAO_Download_via_Play_Store.pdf" target="_blank">
							        	<span>GUIA DE INSTALAÇÃO: Download via Play Store</span>
						        	</a>
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>
			        				<a class="pdf" href="download/GUIA_DE_UTILIZACAO_Abertura_de_SS.pdf" target="_blank">
							        	<img src="img/suporte/pdf.png" width="20">
						        	</a>
			        			</td>
			        			<td>
			        				<a class="pdf" href="download/GUIA_DE_UTILIZACAO_Abertura_de_SS.pdf" target="_blank">
							        	<span>GUIA DE UTILIZAÇÃO: Abertura de SS</span>
						        	</a>
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>
			        				<a class="pdf" href="download/GUIA_DE_UTILIZACAO_Consulta_de_SS.pdf" target="_blank">
							        	<img src="img/suporte/pdf.png" width="20">
						        	</a>
			        			</td>
			        			<td>
			        				<a class="pdf" href="download/GUIA_DE_UTILIZACAO_Consulta_de_SS.pdf" target="_blank">
							        	<span>GUIA DE UTILIZAÇÃO: Consulta de SS</span>
						        	</a>
			        			</td>
			        		</tr>
			        		
			        	</table>
			        	
			        	
			        </div>
			        <!-- Vídeo -->
		        	<div id="video-box">
			        	<div id="txt">Vídeo</div>
			        </div>
		        
				</div>
			</div>
	    </div>
	    	
	    <!-- Rodapé -->
		<?php require_once 'footer.php';?>
 
    </div>
<script>
$(document).ready(function() {
	$('.faq-questions a').each(function() {
		if( $(this).html().length > 120) {
			var new_opt = $(this).html().substring(0, 120) + '...';
			//$(this).attr('title', $(this).val());
			$(this).html(new_opt);
		}
	});

});

$(document).ready(function() {
	$('#passos-instalacao-site').show();
	$('#passos-instalacao-site').find('ul').bxSlider({
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

$('#menu-passos a').click(function() {
	$('#menu-passos div').css('background', '#7EB900');
	$(this).parent('div').css('background', '#DCF0C7');

	var content = $(this).attr('class');
	$('#passos-instalacao-site').hide();
	$(content).show();
	$(content).find('ul').bxSlider({
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
