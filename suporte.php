<!DOCTYPE html>
<html>
<head>
<title>SIGMA ANDROID: Suporte</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/suporte.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">


</script>
</head>
<body>
    <div id="container">
		<div id="content">
			<!-- Cabeçalho -->
			<?php require_once 'header.php';?>
	        
	        <!-- Conteúdo -->
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
</script>
</body>
</html>
