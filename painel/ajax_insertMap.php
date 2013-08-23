<?php
require_once '../apis/google-api-php-client/src/Google_Client.php';
require_once '../apis/google-api-php-client/src/contrib/Google_FusiontablesService.php';

/* Define all constants */
$CLIENT_ID = '1025745161710-4lhurfmujg78vpat56roqs0rocr8oeek.apps.googleusercontent.com';
$FT_SCOPE = 'https://www.googleapis.com/auth/fusiontables';
$SERVICE_ACCOUNT_NAME = '1025745161710-4lhurfmujg78vpat56roqs0rocr8oeek@developer.gserviceaccount.com';
$KEY_FILE = '../apis/google-api-php-client/b3785deabaa62a966a30d5e0e10be89111d5d44a-privatekey.p12';

$client = new Google_Client();
$client->setApplicationName("GFTPrototype");
$client->setClientId($CLIENT_ID);

//add key
$key = file_get_contents($KEY_FILE);
$client->setAssertionCredentials(new Google_AssertionCredentials(
    $SERVICE_ACCOUNT_NAME,
    array($FT_SCOPE),
    $key)
);


$service = new Google_FusiontablesService($client);

$id_usuario = $_POST['id'];

//Pega dados do usuário
require_once '../conexoes.inc.php';
$db = Database::instance('mobile_provider');

$sql = "select empresa, endereco, cidade, uf, telefone, email, usuario, subdominio
 from clientes where id = :id_usuario";
$query = $db->prepare($sql);
$query->execute(array(':id_usuario' => $id_usuario));
$res = $query->fetch();


	$endereco = $res['endereco'].', '.$res['cidade'].', '.$res['uf'];
	
	//Primeiro verifica se este perfil já está cadastrado
	$select = "select id_usuario from 13Ozdr2Yqo5aZXuZtcSMw-C9rFwNriwEcnZ2kqGo";
	$result = $service->query->sql($select);
		
	foreach ($result['rows'] as $key => $resu) {
		if ($resu[0] == $id_usuario) {
			$ja_tem = true;
			continue;
		}else {
			$ja_tem = false;
		}	
	}
	
	//Depois insere ou atualiza registro
	if (! $ja_tem) {
		$insertQuery = "insert into 13Ozdr2Yqo5aZXuZtcSMw-C9rFwNriwEcnZ2kqGo (Empresa, id_usuario, Endereco, Telefone, Email, Usuario, Subdominio) values ('".$res['empresa']."', '".$id_usuario."', '".$endereco."', '".$res['telefone']."', '".$res['email']."', '".$res['usuario']."', '".$res['subdominio']."')";
		$service->query->sql($insertQuery);
		echo 'true';
	}else {
		$findRowid = "select rowid from 13Ozdr2Yqo5aZXuZtcSMw-C9rFwNriwEcnZ2kqGo where id_usuario = '".$id_usuario."'";
		$resultado = $service->query->sql($findRowid);
		$rowid = $resultado["rows"][0][0];
		
		$updateQuery = "update 13Ozdr2Yqo5aZXuZtcSMw-C9rFwNriwEcnZ2kqGo set Empresa = '".$res['empresa']."', Endereco = '".$endereco."', Telefone = '".$res['telefone']."', Email = '".$res['email']."', Usuario = '".$res['usuario']."', Subdominio = '".$res['subdominio']."' where rowid = '".$rowid."'";
		$service->query->sql($updateQuery);
	}

?>