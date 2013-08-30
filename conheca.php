<!DOCTYPE html>
<html>
<head>
<title>SIGMA ANDROID: Conheça</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/conheca.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      
    
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

</body>
</html>
