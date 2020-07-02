<?php
include __DIR__.'/../controler/UsuariosControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);


$id = $obj->id;

if(!empty($data)){	
 $UsuariosControl = new UsuariosControl();
 $UsuariosControl->delete($obj,$id);
 header('Location:listar.php');
}



?>