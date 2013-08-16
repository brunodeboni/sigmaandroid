<?php
session_start();
if(!isset($_SESSION['487usuario'])) {
	die("<strong>Acesso Negado!</strong>");
}
?>
<!doctype html>
<html ng-app>
<head>
	<meta charset="utf-8">
	<title>Painel de Controle</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link rel="stylesheet" href="default.css">
	<style>
	#container {
		width: 900px;
	}
	</style>
</head>
<body>
<div id="container">
	<h1>Comprar Licença para Usuário</h1>
	
	<p>Selecione o usuário, clique em Busca dados (para que apareça o nome da empresa) e escolha entre os diferentes tipos de licença SIGMA Android:</p><br>
            
    <span>Usuário:</span>
    <input type="text" id="usuario" name="usuario" class="block">
	<button id="fetch">Buscar dados</button><br><br>
	
	<form id="form_comprar" method="post" action="" ng-controller="Comprar">
		
        <input type="hidden" id="id_usuario" name="id_usuario">

        <span>Empresa:</span>
        <input type="text" id="empresa" class="block" disabled><br>

	    <!-- Licenças -->
	    <span>Comprar licença de instalação?</span>
	    <select id="licenca_instalacao" name="licenca_instalacao" ng-model="licenca_instalacao" class="block">
	        <option value="sim">Sim</option>
	        <option value="nao">Não</option>
	    </select><br>
			
        <span>Licença de uso (mensal):</span>
        <select id="licenca_uso" name="licenca_uso" class="block" ng-model="licenca_uso">
            <option value="Licença por Usuário">Licença por Usuário</option>
            <option value="Licença Ilimitada">Licença Ilimitada</option>
        </select><br>

        <span id="qnt">Quantidade de Usuários:</span>
        <input type="text" name="quantidade" id="quantidade" class="block" ng-model="quantidade"><br>

        <span>Valor:</span><br>
        <div id="valor"></div>
        <input type="hidden" id="valor_total" name="valor_total"><br>

        <div id="erro"></div>      
        <!-- submit do form (obrigatório) -->
        <button id="btn">Comprar licença</button>
		<a href="painel.php">Voltar</a>
        </form>

<script>

$('#fetch').click(function() {
	var usuario = $('#usuario').val();
	
	$.post('ajax_findUser.php', {usuario: usuario}, function(data) {
		var user = $.parseJSON(data);
		
		$('#id_usuario').val(user.id_usuario);
		$('#empresa').val(user.empresa);	
	});
});

$('#btn').click(function() {
	$('#form_comprar').submit();
});

function Comprar($scope) {
	$scope.licenca_instalacao = 'sim';
	$scope.licenca_uso = 'Licença por Usuário';
	$scope.quantidade = 1;

	$scope.$watch('quantidade', function() {
		if ($scope.licenca_uso == "Licença por Usuário") {
			var quantidade = $scope.quantidade;
			var valor_licenca = quantidade * 5;
			var total = valor_licenca + 500;

			if ($scope.licenca_instalacao == 'sim') {
				$('#valor').html('<div id="valor-instalacao">Instalação e configuração: R$ 500,00</div><div id="mais"> + </div><div id="valor-licenca">Licença para '+ quantidade +' Usuário(s): R$ '+ valor_licenca +',00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ '+ total +',00</div>');
				$('#valor_total').val(total);
			}else {
				$('#valor').html('<div id="valor-licenca">Licença para '+ quantidade +' Usuário(s): R$ '+ valor_licenca +',00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ '+ valor_licenca +',00</div>');
				$('#valor_total').val(valor_licenca);
			}
		}else {
			$scope.quantidade = 1;
		}
	});

	$scope.$watch('licenca_uso', function() {
		if ($scope.licenca_uso == "Licença por Usuário") {
			$('#qnt').show();
			$('#quantidade').show();

			var quantidade = $scope.quantidade;
			var valor_licenca = quantidade * 5;
			var total = valor_licenca + 500;

			if ($scope.licenca_instalacao == 'sim') {
				$('#valor').html('<div id="valor-instalacao">Instalação e configuração: R$ 500,00</div><div id="mais"> + </div><div id="valor-licenca">Licença para '+ quantidade +' Usuário(s): R$ '+ valor_licenca +',00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ '+ total +',00</div>');
				$('#valor_total').val(total);
			}else {
				$('#valor').html('<div id="valor-licenca">Licença para '+ quantidade +' Usuário(s): R$ '+ valor_licenca +',00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ '+ valor_licenca +',00</div>');
				$('#valor_total').val(valor_licenca);
			}	
		}
		if ($scope.licenca_uso == "Licença Ilimitada") {
			$scope.quantidade = 1;
			$('#quantidade').hide();
	        $('#qnt').hide();
	        
			if ($scope.licenca_instalacao == 'sim') {
				$('#valor').html('<div id="valor-instalacao">Instalação e configuração: R$ 500,00</div><div id="mais"> + </div><div id="valor-licenca">Licença Ilimitada: R$ 250,00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ 750,00</div>');
				$('#valor_total').val('750.00');
			}else {
				$('#valor').html('<div id="valor-licenca">Licença Ilimitada: R$ 250,00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ 250,00</div>');
				$('#valor_total').val('250.00');
			}

		}
	});

	$scope.$watch('licenca_instalacao', function() {
		if ($scope.licenca_uso == "Licença por Usuário") {
			$('#qnt').show();
			$('#quantidade').show();

			var quantidade = $scope.quantidade;
			var valor_licenca = quantidade * 5;
			var total = valor_licenca + 500;

			if ($scope.licenca_instalacao == 'sim') {
				$('#valor').html('<div id="valor-instalacao">Instalação e configuração: R$ 500,00</div><div id="mais"> + </div><div id="valor-licenca">Licença para '+ quantidade +' Usuário(s): R$ '+ valor_licenca +',00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ '+ total +',00</div>');
				$('#valor_total').val(total);
			}else {
				$('#valor').html('<div id="valor-licenca">Licença para '+ quantidade +' Usuário(s): R$ '+ valor_licenca +',00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ '+ valor_licenca +',00</div>');
				$('#valor_total').val(valor_licenca);
			}	
		}
		if ($scope.licenca_uso == "Licença Ilimitada") {
			$scope.quantidade = 1;
			$('#quantidade').hide();
	        $('#qnt').hide();
	        
			if ($scope.licenca_instalacao == 'sim') {
				$('#valor').html('<div id="valor-instalacao">Instalação e configuração: R$ 500,00</div><div id="mais"> + </div><div id="valor-licenca">Licença Ilimitada: R$ 250,00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ 750,00</div>');
				$('#valor_total').val('750.00');
			}else {
				$('#valor').html('<div id="valor-licenca">Licença Ilimitada: R$ 250,00 (válido por 30 dias)</div><div id="igual"> = </div><div id="valor-total">R$ 250,00</div>');
				$('#valor_total').val('250.00');
			}

		}
	});
	 
}

</script>

<?php 
if (isset($_POST['id_usuario'])) {
	$id_usuario = $_POST['id_usuario'];
	if ($id_usuario == "") {
		echo '<div id="erro">Por favor, selecione o usuário.</div>';
		exit();
	}
	
	$licenca_instalacao = $_POST['licenca_instalacao']; //não e sim
	if ($licenca_instalacao == 'sim') {
		$item1 = 'Instalação e configuração';
		$valor1 = '500.00';
	}else {
		$item1 = null;
		$valor1 = null;
	}
	
	$licenca_uso = $_POST['licenca_uso'];
	if ($licenca_uso == 'Licença por Usuário') {
		$quantidade = $_POST['quantidade'];
	}else {
		$quantidade = 'Ilimitado';
	}
	$valor2 = '5.00';
	if ($_POST['valor_total'] == "") {
		echo '<div id="erro">Por favor, preencha todos os dados.</div>';
		exit();
	}
	$valor_total = $_POST['valor_total'].".00";
	
	
	require_once '../conexoes.inc.php';
	$db = Database::instance('mobile_provider');
	
	$sql = "insert into pagamento (id_usuario, item1, valor1, item2, quantidade2, valor2, total, status_pagamento) 
	values (:id_usuario, :item1, :valor1, :item2, :quantidade2, :valor2, :total, 'Completo')";
	$query = $db->prepare($sql);
	$success = $query->execute(array(
		':id_usuario' => $id_usuario,
		':item1' => $item1,
		':valor1' => $valor1,
		':item2' => $licenca_uso,
		':quantidade2' => $quantidade,
		':valor2' => $valor2,
		':total' => $valor_total
	));
	
	if ($success) {
		
		$sqll = "select id from licenca where id_usuario = :id_usuario";
		$queryy = $db->prepare($sqll);
		$queryy->execute(array(':id_usuario' => $id_usuario));
		
		if ($queryy->rowCount() > 0) {
			$sql2 = "update licenca set data_fim = date_add(current_date, interval 30 day), usuarios = :quantidade
				  where id_usuario = :id_usuario";
			$query2 = $db->prepare($sql2);
			$success2 = $query2->execute(array('
				:id_usuario' => $id_usuario,
				':quantidade' => $quantidade
			));
			
		}else {
			$sql2 = "insert into licenca (id_usuario, dias_licenca, data_fim, usuarios) 
				values (:id_usuario, 30, date_add(current_date, interval 30 day), :quantidade)";
			$query2 = $db->prepare($sql2);
			$success2 = $query2->execute(array(
				':id_usuario' => $id_usuario,
				':quantidade' => $quantidade
			));
			
			$sql4 = "update cadastro set licenca_instalacao = 1 where id = :id_usuario";
        	$query4 = $db->prepare($sql4);
        	$query4->bindValue(':id_usuario', $id_usuario, PDO::PARAM_INT);
        	$query4->execute();
			
		}
		
		if ($success2) {
			echo '<div id="sucesso">Pagamento cadastrado com sucesso.</div>';
		}else {
			echo '<div id="erro">Ocorreu um erro ao cadastrar a licença.</div>';
		}
	}else {
		echo '<div id="erro">Ocorreu um erro ao cadastrar o pagamento.</div>';
	}
}

?>

</div>
</body>
</html>
