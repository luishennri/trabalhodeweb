<?php
include __DIR__.'/../controler/RelacaoControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

if(!$id) {
	http_response_code(400);
	echo json_encode(array("mensagem" => "É necessário um ID para atualização"));
}
else {
	if(!empty($data)){	
	 $RelacaoControl = new RelacaoControl();
	 $RelacaoControl->update($obj , $id);
	}
}

?>