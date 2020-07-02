<?php
include __DIR__.'/../controler/UsuariosControl.php';
$UsuariosControl = new UsuariosControl();

header('Content-type: application/json');

if (!isset($args[1])) {
	$result = $UsuariosControl->findAll();
	if ($result) {
		http_response_code(200);
		echo json_encode($result);
	}
	else {
		http_response_code(400);
		echo json_encode(array("mensagem" => "Não encontrado"));
	}
}
else {
	$result = $UsuariosControl->find($args[1]);
	if ($result) {
		http_response_code(200);
		echo json_encode($result);
	}
	else {
		http_response_code(400);
		echo json_encode(array("mensagem" => "Não encontrado"));
	}	
}
?>