<?php
include __DIR__.'/../model/Relacao.php';

class RelacaoControl{

	function insert($obj){
		$Relacao = new Relacao();
		return $Relacao->insert($obj);
	}

	function update($obj,$id){
		$Relacao = new Relacao();
		return $Relacao->update($obj,$id);
	}

	function delete($obj,$id){
		$Relacao = new Relacao();
		return $Relacao->delete($obj,$id);
	}

	function find($id = null){
		$Relacao = new Relacao();
		return $Relacao->find($id);
	}

	function findAll(){
		$Relacao = new Relacao();
		return $Relacao->findAll();
	}
}

?>