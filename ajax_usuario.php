<?php

require 'conexoes.inc.php';
$db = Database::instance('mobile_provider');

$sql = "select id from clientes where usuario = :usuario";
$query = $db->prepare($sql);
$query->execute(array(':usuario' => $_POST['usuario']));

if ($query->rowCount() > 0) echo 'false'; //se JÁ tem usuário, retorna FALSE
else echo 'true'; //se NÃO tem usuário, retorna TRUE


?>