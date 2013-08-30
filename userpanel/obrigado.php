<?php

header('Content-Type: text/html; charset=ISO-8859-1');

define('TOKEN', 'F3696EBCE67F4F5F8E7226E2FCDA2B39');

class PagSeguroNpi {
	
	private $timeout = 20; // Timeout em segundos
	
	public function notificationPost() {
		$postdata = 'Comando=validar&Token='.TOKEN;
		foreach ($_POST as $key => $value) {
			$valued    = $this->clearStr($value);
			$postdata .= "&$key=$valued";
		}
		return $this->verify($postdata);
	}
	
	private function clearStr($str) {
		if (!get_magic_quotes_gpc()) {
			$str = addslashes($str);
		}
		return $str;
	}
	
	private function verify($data) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "https://pagseguro.uol.com.br/pagseguro-ws/checkout/NPI.jhtml");
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_TIMEOUT, $this->timeout);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$result = trim(curl_exec($curl));
		curl_close($curl);
		return $result;
	}

}

if (count($_POST) > 0) {
	
    // POST recebido, indica que é a requisição do NPI.
    $npi = new PagSeguroNpi();
    $result = $npi->notificationPost();

    $transacaoID = isset($_POST['TransacaoID']) ? $_POST['TransacaoID'] : '';

    if ($result == "VERIFICADO") {
        //O post foi validado pelo PagSeguro.
        require_once '../conexoes.inc.php';
        $db = Database::instance('mobile_provider');

        $sql = "select cliente_id, item2, quantidade2 from pagamento where ref_code = :referencia";
        $query = $db->prepare($sql);
        $query->execute(array(':referencia' => $_POST['Referencia']));
        $resultado = $query->fetch();
        $cliente_id = $resultado['cliente_id'];
        $licenca = $resultado['item2'];
        if ($licenca == 'Licença por Usuário') {
            $quantidade = $resultado['quantidade2'];
        }else {
            $quantidade = null;
        }

        //Pega id do cliente neste aplicativo
        $sql_cap = "select id from clientes_aplicativos where cliente_id = :cliente_id";
        $query_cap = $db->prepare($sql_cap);
        $query_cap->bindValue(':cliente_id', $cliente_id, PDO::PARAM_INT);
        $query_cap->execute();
        $cap_id = $query_cap->fetchColumn();

        //Verifica se este cliente já tem licença neste aplicativo
        $sql1 = "select id from licenca where cap_id = :cap_id";
        $query1 = $db->prepare($sql1);
        $query1->bindValue(':cap_id', $cap_id, PDO::PARAM_INT);
        $query1->execute();

        if($query1->rowCount() > 0) {
            $sql2 = "update licenca set dias_licenca = '30', data_fim = date_add(current_date, interval 30 day),
             max_usuarios = :quantidade where cap_id = :cap_id";
            $query2 = $db->prepare($sql2);
            $query2->bindValue(':cap_id', $cap_id, PDO::PARAM_INT);
            $query2->bindValue(':quantidade', $quantidade, PDO::PARAM_INT);
            $query2->execute();
        }else {
            $sql2 = "insert into licenca (cap_id, dias_licenca, data_fim, max_usuarios) 
            values (:cap_id, '30', date_add(current_date, interval 30 day), :quantidade)";
            $query2 = $db->prepare($sql2);
            $query2->bindValue(':cap_id', $cap_id, PDO::PARAM_INT);
            $query2->bindValue(':quantidade', $quantidade, PDO::PARAM_INT);
            $query2->execute();
        }

        $sql3 = "update pagamento set stuatus_pagamento = 'Completo' where cliente_id = :cliente_id";
        $query3 = $db->prepare($sql3);
        $query3->bindValue(':cliente_id', $cliente_id, PDO::PARAM_INT);
        $query3->execute();

    }else if ($result == "FALSO") {
        //O post não foi validado pelo PagSeguro.
    }else {
        //Erro na integração com o PagSeguro.
    }
	
}else {
	// POST não recebido, indica que a requisição é o retorno do Checkout PagSeguro.
	// No término do checkout o usuário é redirecionado para este bloco.
	?>
	<!doctype html>
	<html>
	<head>
		<link rel="stylesheet" href="default.css">
	</head>
	<body>
		<div style="width: 600px; height: 200px; margin: auto; text-align: center; background: #F6F7F8; -webkit-border-radius: 10px; border-radius: 10px;">
		    <h3 style="padding-top: 20px; text-align: center;">Obrigado por efetuar a compra.</h3>
		    <a href="../index.php" style="padding:10px 30px;
		    background:#6AC334;
		    color: #FFF;
		    font-weight: bold;
		    text-decoration: none;
		    text-align: center;
		    border: 0;
		    -webkit-border-radius: 5px;
		    border-radius: 5px;">P&aacute;gina inicial</a>
	    </div>
    </body>
    </html>
    <?php
}

?>
