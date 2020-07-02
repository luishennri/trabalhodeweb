<?php
include __DIR__.'/../controler/JogosControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
$id = $obj->$IdJogos;

if(!$id) {
	http_response_code(400);
	echo json_encode(array("mensagem" => "É necessário um ID para atualização"));
}
else {
	if(!empty($data)){	
	 $JogosControl = new JogosControl();
	 $JogosControl->update($obj , $IdJogos);
	}
}

?>