<?php

if (isset ($_POST['id'])) {
	require '../conexoes.inc.php';
	$db = Database::instance('mobile_provider');
	
	$sql = "update clientes_aplicativos set aprovado = 2 where cliente_id = :id";
	$query = $db->prepare($sql);
	$success = $query->execute(array(':id' => $_POST['id']));
	
	if ($success) echo 'true';
	else echo 'false';
}

?>