<?php
include __DIR__.'/../Model/Jogos.php';

class JogosControl{
	function insert($obj){
		$Jogos = new Jogos();
		return $Jogos->insert($obj);
	}

	function update($obj,$id){
		$Jogos = new Jogos();
		return $Jogos->update($obj,$id);
	}

	function delete($obj,$id){
		$Jogos = new Jogos();
		return $Jogos->delete($obj,$id);
	}

	function find($id = null){
		$Jogos = new Jogos();
		return $Jogos->find($id);
	}

	function findAll(){
		$Jogos = new Jogos();
		return $Jogos->findAll();
	}
}

?>