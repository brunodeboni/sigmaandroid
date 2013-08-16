<?php
            
require_once '../conexoes.inc.php';
$db = Database::instance('mobile_provider'); 
            
$sql = "select id, empresa from cadastro where usuario = :user";
$query = $db->prepare($sql);
$query->execute(array(':user' => $_POST['usuario']));
$res = $query->fetch();

$resultado['id_usuario'] = $res['id'];
$resultado['empresa'] = $res['empresa'];

echo json_encode($resultado);       
?>
