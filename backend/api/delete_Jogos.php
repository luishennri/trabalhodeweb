<?php
include __DIR__.'/../controler/JogosControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);


$id = $obj->id;

if(!empty($data)){	
 $JogosControl = new JogosControl();
 $JogosControl->delete($obj,$id);
 header('Location:listar.php');
}



?>