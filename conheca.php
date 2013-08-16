<!DOCTYPE html>
<html>
<head>
<title>SIGMA ANDROID: Conheça</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/conheca.css">
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
	        <!-- Animação em flash -->
			<object width="1000" height="100" id="android">
		        <param name="movie" value="swf/conheca.swf"></param>
		        <param name="allowFullScreen" value="true"></param>
		        <param name="allowscriptaccess" value="always"></param>
		        <embed src="swf/conheca.swf" type="application/x-shockwave-flash" width="1000" height="100" allowscriptaccess="always" allowfullscreen="true"></embed>
			</object>
	        
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
	            

<script>
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
			
	    </div>
	    	
	    <!-- Rodapé -->
		<?php require_once 'footer.php';?>
 
    </div>

</body>
</html>
