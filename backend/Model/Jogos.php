<?php

include __DIR__.'/Conexao.php';

class Jogos extends Conexao {
	private $IdJogos;
    private $Imagem;
    private $Nome;
    private $Nota;
    private $Desenvolvedora;
    private $Plataforma;
    private $Genero;
    private $Jogadores;
    private $Lancamento;
    private $Trailer;

    public function getIdJogos() {
        return $this->IdJogos;
    }

    public function setIdJogos($IdJogos) {
        $this->IdJogos = $IdJogos;
        return $this;
    }

    public function getImagem() {
        return $this->Imagem;
    }

    public function setImagem($Imagem) {
        $this->Imagem = $Imagem;
        return $this;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
        return $this;
    }

    public function getNota() {
        return $this->Nota;
    }

    public function setNota($Nota) {
        $this->Nota = $Nota;
        return $this;
    }

    public function getDesenvolvedora() {
        return $this->Desenvolvedora;
    }

    public function setDesenvolvedora($Desenvolvedora) {
        $this->Desenvolvedora = $Desenvolvedora;
        return $this;
    }

    public function getPlataforma() {
        return $this->Plataforma;
    }

    public function setPlataforma($Plataforma) {
        $this->Plataforma = $Plataforma;
        return $this;
    }

    public function getGenero() {
        return $this->Genero;
    }

    public function setGenero($Genero) {
        $this->Genero = $Genero;
        return $this;
    }

    public function getJogadores() {
        return $this->Jogadores;
    }

    public function setJogadores($Jogadores) {
        $this->Jogadores = $Jogadores;
        return $this;
    }

    public function getLancamento() {
        return $this->Lancamento;
    }

    public function setLancamento($Lancamento) {
        $this->Lancamento = $Lancamento;
        return $this;
    }

    public function getTrailer() {
        return $this->Trailer;
    }

    public function setTrailer($Trailer) {
        $this->Trailer = $Trailer;
        return $this;
    }

    public function insert($obj){    
        $sql = "INSERT INTO Jogos(Imagem,Nome,Nota,Desenvolvedora,Plataforma,Genero,Jogadores,Lancamento,Trailer) 
        VALUES (:Imagem,:Nome,:Nota,:Desenvolvedora,:Plataforma,:Genero,:Jogadores,:Lancamento,:Trailer)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('Imagem' , $obj->Imagem);
        $consulta->bindValue('Nome' , $obj->Nome);
        $consulta->bindValue('Nota' , $obj->Nota);
        $consulta->bindValue('Desenvolvedora' , $obj->Desenvolvedora);
        $consulta->bindValue('Plataforma' , $obj->Plataforma);
        $consulta->bindValue('Genero' , $obj->Genero);
        $consulta->bindValue('Jogadores', $obj->Jogadores);
        $consulta->bindValue('Lancamento' , $obj->Lancamento);
        $consulta->bindValue('Trailer' , $obj->Trailer);
        $consulta->execute();
        return Conexao::lastId(); 
    }

    public function update($obj,$IdUsuario = null){
        $sql = "UPDATE Jogos SET Imagem = :Imagem, Nome = :Nome, Nota = :Nota, Desenvolvedora = :Desenvolvedora, Plataforma = :Plataforma, Genero = :Genero, Jogadores = :Jogadores, Lancamento = :Lancamento, Trailer = :Trailer WHERE IdJogos = :IdJogos ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('Imagem' , $obj->Imagem);
        $consulta->bindValue('Nome' , $obj->Nome);
        $consulta->bindValue('Nota' , $obj->Nota);
        $consulta->bindValue('Desenvolvedora' , $obj->Desenvolvedora);
        $consulta->bindValue('Plataforma' , $obj->Plataforma);
        $consulta->bindValue('Genero' , $obj->Genero);
        $consulta->bindValue('Jogadores', $obj->Jogadores);
        $consulta->bindValue('Lancamento' , $obj->Lancamento);
        $consulta->bindValue('Trailer' , $obj->Trailer);
        return $consulta->execute();
    }

    public function delete($obj,$IdJogos = null){
        $sql =  "DELETE FROM Jogos WHERE IdJogos = :IdJogos";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('IdJogos',$IdJogos);
        $consulta->execute();
        return $consulta->execute();
    }
    
    public function find($IdJogos = null){
        $sql =  "SELECT * FROM Jogos WHERE IdJogos = :IdJogos";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('IdJogos',$IdJogos);
        $consulta->execute();
        return $consulta->fetch();
    }

    public function findAll(){
        $sql = "SELECT * FROM Jogos";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }
}    


?>