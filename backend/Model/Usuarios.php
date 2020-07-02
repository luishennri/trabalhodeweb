<?php

include __DIR__.'/Conexao.php';
    class Usuarios extends Conexao {
        private $IdUsuario; 
	    private $Nome;
        private $Username;    
        private $Senha;
        private $Cidade;
        private $Estado;
        private $Pais;
        private $Descricao;
        Private $Imagem;

        public function getIdUsuario() {
            return $this->IdUsuario;
        }
    
        public function setIdUsuario($IdUsuario) {
            $this->IdUsuario = $IdUsuario;
            return $this;
        }
    
        public function getNome() {
            return $this->Nome;
        }

        public function setNome($Nome) {
            $this->Nome = $Nome;
            return $this;
        }

        public function getUsername() {
            return $this->Username;
        }
    
        public function setUsername($Username) {
            $this->Username = $Username;
            return $this;
        }

        public function getSenha() {
            return $this->Senha;
        }

        public function setSenha($Senha) {
            $this->Senha = $Senha;
            return $this;
        }

        public function getCidade() {
            return $this->Cidade;
        }

        public function setCidade($Cidade) {
            $this->Cidade = $Cidade;
            return $this;
        }

        public function getEstado() {
            return $this->Estado;
        }

        public function setEstado($Estado) {
            $this->Estado = $Estado;
            return $this;
        }

        public function getPais() {
            return $this->Pais;
        }

        public function setPais($Pais) {
            $this->Pais = $Pais;
            return $this;
        }

        public function getDescricao() {
            return $this->Descricao;
        }

        public function setDescricao($Descricao) {
            $this->Descricao = $Descricao;
            return $this;
        }

        public function getImagem() {
            return $this->Imagem;
        }

        public function setImagem($Imagem) {
            $this->Imagem = $Imagem;
            return $this;
        }
        
        public function insert($obj){    
            $sql = "INSERT INTO Usuarios(Nome,Username,Senha,Cidade,Estado,Pais,Descricao,Imagem) VALUES (:Nome,:Username,:Senha,:Cidade,:Estado,:Pais,:Descricao,:Imagem)";
            $consulta = Conexao::prepare($sql);
            $consulta->bindValue('Nome' , $obj->Nome);
            $consulta->bindValue('Username' , $obj->Username);
            $consulta->bindValue('Senha' , $obj->Senha);
            $consulta->bindValue('Cidade' , $obj->Cidade);
            $consulta->bindValue('Estado' , $obj->Estado);
            $consulta->bindValue('Pais', $obj->Pais);
            $consulta->bindValue('Declaracao' , $obj->Declaracao);
            $consulta->bindValue('Imagem' , $obj->Imagem);
            $consulta->execute();
            return Conexao::lastId(); 
        }

        public function update($obj,$IdUsuario = null){
            $sql = "UPDATE Usuarios SET Nome = :Nome, Username = :Username Senha = :Senha, Cidade = :Cidade, Estado = :Estado, Pais = :Pais, Descricao = :Descricao, Imagem = :Imagem WHERE IdUsuario = :IdUsuario ";
            $consulta = Conexao::prepare($sql);
            $consulta->bindValue('Nome' , $obj->Nome);
            $consulta->bindValue('Username' , $obj->Username);
            $consulta->bindValue('Senha' , $obj->Senha);
            $consulta->bindValue('Cidade' , $obj->Cidade);
            $consulta->bindValue('Estado' , $obj->Estado);
            $consulta->bindValue('Pais', $obj->Pais);
            $consulta->bindValue('Declaracao' , $obj->Declaracao);
            $consulta->bindValue('Imagem' , $obj->Imagem);
            $consulta->bindValue('IdUsuario', $IdUsuario);
		    return $consulta->execute();
        }

        public function delete($obj,$IdUsuario = null){
            $sql =  "DELETE FROM Usuarios WHERE IdUsuario = :IdUsuario";
            $consulta = Conexao::prepare($sql);
            $consulta->bindValue('IdUsuario',$IdUsuario);
            $consulta->execute();
            return $consulta->execute();
        }
        
        public function find($IdUsuario = null){
            $sql =  "SELECT * FROM Usuarios WHERE IdUsuario = :IdUsuario";
            $consulta = Conexao::prepare($sql);
            $consulta->bindValue('IdUsuario',$IdUsuario);
            $consulta->execute();
            return $consulta->fetch();
        }
    
        public function findAll(){
            $sql = "SELECT * FROM Usuarios";
            $consulta = Conexao::prepare($sql);
            $consulta->execute();
            return $consulta->fetchAll();
        }
    }    

?>