<?php
session_start();
if(!isset($_SESSION['487usuario'])) die("<strong>Acesso Negado!</strong>");
?>
<!doctype html>
<html ng-app>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <style>
    	#container {
        	width: 900px;
            background: #F6F7F8;
       	}
    </style>
</head>
<body>
    <div id="container">
        <h1>Compra de Licenças</h1>
        <!-- Declaração do formulário -->
        <form id="form_comprar" method="post" action="" ng-controller="Comprar">
            <p>Escolha abaixo entre os diferentes tipos de licença SIGMA Android e faça o pagamento usando o PagSeguro do UOL:</p><br>

            <?php
            //$user = 'henrique';
            $user = $_SESSION['487name'];
            
            require_once '../conexoes.inc.php';
            $db = Database::instance('mobile_provider'); 
            
            $sql = "select id, empresa, cnpj, telefone, email, licenca_instalacao from cadastro where usuario = :user";
            $query = $db->prepare($sql);
            $query->execute(array(':user' => $user));
            $res = $query->fetch();

            $id_usuario = $res['id'];
            $empresa = $res['empresa'];
            $cnpj = $res['cnpj'];
            $telefone = $res['telefone'];
            $email = $res['email'];
            $licenca_instalacao = $res['licenca_instalacao'];

            function geraCodigo($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false) {
				$lmin = 'abcdefghijklmnopqrstuvwxyz';
				$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$num = '1234567890';
				$simb = '!@#$%*-';
				$retorno = '';
				$caracteres = '';
		
				//$caracteres .= $lmin;
				if ($maiusculas) $caracteres .= $lmai;
				if ($numeros) $caracteres .= $num;
				if ($simbolos) $caracteres .= $simb;
		
				$len = strlen($caracteres);
				for ($n = 1; $n <= $tamanho; $n++) {
					$rand = mt_rand(1, $len);
					$retorno .= $caracteres[$rand-1];
				}
		
				return $retorno;
            }


            ?>

            <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
            <input type="hidden" name="telefone" value="<?php echo $telefone; ?>">

            <span>Empresa:</span>
            <input type="text" id="empresa" class="block" value="<?php echo $empresa; ?>" disabled><br>
            <input type="hidden" id="empresa" name="empresa" value="<?php echo $empresa; ?>">

            <!-- Campos obrigatórios -->
            <span>E-mail:</span>
            <input type="text" class="block" value="<?php echo $email; ?>" disabled><br>
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            
            <?php if ($licenca_instalacao == 0) { ?>
	            <!-- Itens do pagamento (ao menos um item é obrigatório) -->
	            <input type="hidden" name="itemDescription1" value="Instalação e configuração">
	            <input type="hidden" name="itemQuantity1" value="1">
	            <input type="hidden" name="itemAmount1" value="500.00">
			<?php } ?>
			
            <span>Licença:</span>
            <select id="licenca" name="itemDescription2" class="block" ng-model="licenca">
                <option value="Licença por Usuário">Licença por Usuário</option>
                <option value="Licença Ilimitada">Licença Ilimitada</option>
            </select><br>

            <span id="qnt">Quantidade de Usuários:</span>
            <input type="text" name="itemQuantity2" id="quantidade" class="block" ng-model="quantidade"><br>

            <span>Valor:</span><br>
            <div id="valor">
            	<?php if ($licenca_instalacao == 0) { ?>
            		<div id="valor-subtotal">Subtotal: Instalação e configuração: R$ 500,00</div>
            		
            	<?php } ?>
            </div>
            <input type="hidden" id="itemAmount2" name="itemAmount2" id="itemAmount1" class="block" value=""><br>


            <!-- Código de referência do pagamento no seu sistema (opcional) -->
            <input type="hidden" name="ref_code" value="<?php echo 'REF'.geraCodigo(8, false); ?>">
              
            <!-- submit do form (obrigatório) -->
            <button id="btn">Comprar licença</button>

        </form>

<script>

$(document).ready(function() {
	$('#quantidade').hide();
    $('#qnt').hide();
});

$('#btn').click(function() {
	$('#form_comprar').submit();
});

function Comprar($scope) {

	$scope.licenca = 'Licença Ilimitada';
	$scope.quantidade = 1;

	$scope.$watch('quantidade', function() {
		if ($scope.licenca == "Licença por Usuário") {
			var quantidade = $scope.quantidade;
			var valor_licenca = quantidade * 5;
			var total = valor_licenca + 500;

			<?php if ($licenca_instalacao == 0) { ?>
				$('#valor').html('<div id="valor-instalacao">Instalação e configuração: R$ 500,00</div><div id="mais"> + </div><div id="valor-licenca">Licença para '+ quantidade +' Usuário(s): R$ '+ valor_licenca +',00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ '+ total +',00</div>');
			<?php }else { ?>
				$('#valor').html('<div id="valor-licenca">Licença para '+ quantidade +' Usuário(s): R$ '+ valor_licenca +',00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ '+ valor_licenca +',00</div>');
			<?php } ?>
			$('#itemAmount2').val('5.00');
		}else {
			$scope.quantidade = 1;
		}
	});

	$scope.$watch('licenca', function() {
		if ($scope.licenca == "Licença por Usuário") {
			$('#qnt').show();
			$('#quantidade').show();

			var quantidade = $scope.quantidade;
			var valor_licenca = quantidade * 5;
			var total = valor_licenca + 500;

			<?php if ($licenca_instalacao == 0) { ?>
				$('#valor').html('<div id="valor-instalacao">Instalação e configuração: R$ 500,00</div><div id="mais"> + </div><div id="valor-licenca">Licença para '+ quantidade +' Usuário(s): R$ '+ valor_licenca +',00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ '+ total +',00</div>');
			<?php }else { ?>
				$('#valor').html('<div id="valor-licenca">Licença para '+ quantidade +' Usuário(s): R$ '+ valor_licenca +',00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ '+ valor_licenca +',00</div>');
			<?php } ?>
			$('#itemAmount2').val('5.00');
		}
		if ($scope.licenca == "Licença Ilimitada") {
			<?php if ($licenca_instalacao == 0) { ?>
				$('#valor').html('<div id="valor-instalacao">Instalação e configuração: R$ 500,00</div><div id="mais"> + </div><div id="valor-licenca">Licença Ilimitada: R$ 250,00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ 750,00</div>');
			<?php }else { ?>
				$('#valor').html('<div id="valor-licenca">Licença Ilimitada: R$ 250,00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ 250,00</div>');
			<?php } ?>
			$('#itemAmount1').val('750.00');

			$scope.quantidade = 1;
	        $('#quantidade').hide();
	        $('#qnt').hide();
	        $('#itemAmount2').val('250.00');
		}
	});
	
	 
}

</script>
<?php

if (isset($_POST['ref_code'])) {
    
    $id_usuario = $_POST['id_usuario'];

    $item2 = $_POST['itemDescription2'];
    $quantidade2 = $_POST['itemQuantity2'];
    $valor2 = $_POST['itemAmount2'];
    $valor_total = $valor2 * $quantidade2;

    if(isset($_POST['itemDescription1'])) {
        $item1 = $_POST['itemDescription1'];
        $valor1 = $_POST['itemAmount1'];
        $valor_total = $valor1 + $valor_total; //Substitui valor definido acima
    }else {
        $item1 = null;
        $valor1 = null;
    }
	
    $valor_total .= '.00';
    
    $nome_cliente = $_POST['empresa'];
    $email_cliente = $_POST['email'];
    $telefone = decode_telefone($_POST['telefone']);
    $ddd_cliente = substr($telefone, 0, 2);
    $telefone_cliente = substr($telefone, 2);

    $ref_code = $_POST['ref_code'];

    $db = new PDO('mysql:host=mysql.centralsigma.com.br;dbname=mobile_provider',
                	'webadmin', 'webADMIN',
                	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $sql = "insert into pagamento (id_usuario, ref_code, item1, valor1, item2, quantidade2, valor2, total, status_pagamento)
        values (:id_usuario, :ref_code, :item1, :valor1, :item2, :quantidade2, :valor2, :total, 'Pendente')";
    $query = $db->prepare($sql);
    $success = $query->execute(array(
        ':ref_code' => $ref_code,
        ':id_usuario' => $id_usuario,
        ':item1' => $item1,
        ':valor1' => $valor1,
        ':item2' => $item2,
        ':quantidade2' => $quantidade2,
        ':valor2' => $valor2,
        ':total' => $valor_total
    ));

    if ($success) {
        require_once "../apis/PagSeguroLibrary/PagSeguroLibrary.php";

        // Instantiate a new payment request
        $paymentRequest = new PagSeguroPaymentRequest();

        // Sets the currency
        $paymentRequest->setCurrency("BRL");

        // Add an item for this payment request
        //$paymentRequest->addItem('0001', 'Notebook prata', 2, 430.00);
        if (isset($_POST['itemDescription1'])) {
            $item1 = $_POST['itemDescription1'];
            $quantidade1 = $_POST['itemQuantity1'];
            $valor1 = $_POST['itemAmount1'];
            $paymentRequest->addItem('001', $item1, $quantidade1, $valor1);
        }
        $paymentRequest->addItem('002', $item2, $quantidade2, $valor2);

        // Sets a reference code for this payment request, it is useful to identify this payment in future notifications.
        //$paymentRequest->setReference("REF123");
        $paymentRequest->setReference($ref_code);

        // Sets your customer information.
        //$paymentRequest->setSender('João Comprador', 'comprador@s2it.com.br', '11', '56273440', 'CPF', '156.009.442-76');
        $paymentRequest->setSender($nome_cliente, $email_cliente, $ddd_cliente, $telefone_cliente);

        // Sets the url used by PagSeguro for redirect user after ends checkout process
        $paymentRequest->setRedirectUrl("http://www.sigmaandroid.com.br/userpanel/obrigado.php");

        // Another way to set checkout parameters
        /*
        $paymentRequest->addParameter('notificationURL', 'http://www.skymobile.com.br/userpanel/statuspagamento.php');
        if (isset($_POST['itemDescription1'])) {
            $paymentRequest->addIndexedParameter('itemId', '001', 3);
            $paymentRequest->addIndexedParameter('itemDescription', $item1, 3);
            $paymentRequest->addIndexedParameter('itemQuantity', $quantidade1, 3);
            $paymentRequest->addIndexedParameter('itemAmount', $valor1, 3);
        }
        $paymentRequest->addIndexedParameter('itemId', '002', 3);
        $paymentRequest->addIndexedParameter('itemDescription', $item2, 3);
        $paymentRequest->addIndexedParameter('itemQuantity', $quantidade2, 3);
        $paymentRequest->addIndexedParameter('itemAmount', $valor2, 3);
		*/
        try {
                /*
                * #### Crendencials #####
                * Substitute the parameters below with your credentials (e-mail and token)
                * You can also get your credentails from a config file. See an example:
                * $credentials = PagSeguroConfig::getAccountCredentials();
                 */
                $credentials = new PagSeguroAccountCredentials("carolina@redeindustrial.com.br", "F3696EBCE67F4F5F8E7226E2FCDA2B39");
                // Register this payment request in PagSeguro, to obtain the payment URL for redirect your customer.
                $url = $paymentRequest->register($credentials);

                printPaymentUrl($url);
                //header('Location: '.$url);

        } catch (PagSeguroServiceException $e) {
                die($e->getMessage());
        }


        
    }else {
        echo '<div id="erro">Ocorreu um erro ao gerar seu pagamento. Por favor, tente novamente.</div>';
    }
}

    function decode_telefone($telefone){
            $telefone = trim($telefone);
            if($telefone=="") return "";
            $nums = "0123456789";

            $numsarr = str_split($nums);
            $telsarr = str_split($telefone);

            $novo_telefone = "";

            foreach($telsarr as $tel){
                $ex = false;
                foreach($numsarr as $num){
                    if($tel == $num){
                        $ex = true;
                        break;
                    }
                }

                if($ex) $novo_telefone .= $tel;
            }

            return $novo_telefone;
        }
        
        function printPaymentUrl($url) {
        	if ($url) {
            	//echo "<p><a href=\"$url\"><img src=\"https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-comprar-laranja-assina.gif\"></a></p>";
            	header ("Location: $url");
            }
        }
?>
    </div>

</body> 
</html>