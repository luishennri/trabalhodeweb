<?php
include __DIR__.'/../model/Usuarios.php';

class UsuariosControl{
	function insert($obj){
		$Usuarios = new Usuarios();
		return $Usuarios->insert($obj);
	}

	function update($obj,$id){
		$Usuarios = new Usuarios();
		return $Usuarios->update($obj,$id);
	}

	function delete($obj,$id){
		$Usuarios = new Usuarios();
		return $Usuarios->delete($obj,$id);
	}

	function find($id = null){
		$Usuarios = new Usuarios();
		return $Usuarios->find($id);
	}

	function findAll(){
		$Usuarios = new Usuarios();
		return $Usuarios->findAll();
	}
}

?>