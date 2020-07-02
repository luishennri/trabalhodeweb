<?php
include __DIR__.'/../controler/JogosControl.php';
 
header('Content-type: application/json');

$data = file_get_contents('php://input');
$data_utf8 = utf8_encode($data);
$obj =  json_decode($data);
echo $data;
echo $obj;
if(!empty($data)){	
	try {
 		$JogosControl = new JogosControl();
 		$resposta = $JogosControl->insert($obj);
 		http_response_code(200);
 		$obj->IdJogos = $resposta;
 		echo json_encode($obj);
 	}
 	catch (PDOException $e) {
 		http_response_code(400);
		echo json_encode(array("mensagem" => "Parâmetros Inválidos"));
	}
}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Não foram enviados parâmetros"));
}

?>
