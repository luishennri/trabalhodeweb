<?php

include __DIR__.'/Conexao.php';

class Relacao extends Conexao {
    private $IdRelacao; 
	private $IdJogos;
    private $IdUsuario;  

    
    public function getIdRelacao() {
        return $this->IdRelacao;
    }

    public function setIdRelacao($IdRelacao) {
        $this->IdRelacao = $IdRelacao;
        return $this;
    }

    public function getIdJogos() {
        return $this->IdJogos;
    }

    public function setIdJogos($IdJogos) {
        $this->IdJogos = $IdJogos;
        return $this;
    }

    public function getIdUsuario() {
        return $this->IdUsuario;
    }

    public function setIdUsuario($IdUsuario) {
        $this->IdUsuario = $IdUsuario;
        return $this;
    }

    public function insert($obj){    
        $sql = "INSERT INTO Relacao(IdJogos, IdUsuario) VALUES (:IdJogos,:IdUsuario)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('IdJogos' , $obj->IdJogos);
        $consulta->bindValue('IdUsuario' , $obj->IdUsuarios);
        $consulta->execute();
        return Conexao::lastId(); 
    }

    public function update($obj,$IdRelacao = null){
        $sql = "UPDATE Relacao SET IdJogos = :IdJogos, IdUsuario = :IdUsuario WHERE IdRelacao = :IdRelacao ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('IdJogos', $IdJogos);
        $consulta->bindValue('IdUsuario', $IdUsuario);
        $consulta->bindValue('IdRelacao', $IdRelacao);
        return $consulta->execute();
    }

    public function delete($obj,$IdUsuario = null){
        $sql =  "DELETE FROM Relacao WHERE IdRelacao = :IdRelacao";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('IdRelacao',$IdRelacao);
        $consulta->execute();
        return $consulta->execute();
    }
    public function find($IdUsuario ){
        $sql =  "SELECT * FROM relacao WHERE IdUsuario = :IdUsuario";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('IdUsuario',$IdUsuario);
        $consulta->execute();
        return $consulta->fetchAll();
    }

    public function findAll(){
        $sql = "SELECT * FROM relacao";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }
}
?>