<?php
include __DIR__.'/../controler/RelacaoControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);


$id = $obj->id;

if(!empty($data)){	
 $RelacaoControl = new RelacaoControl();
 $RelacaoControl->delete($obj,$id);
 header('Location:listar.php');
}



?>