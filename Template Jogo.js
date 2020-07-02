function pegarJogos() {
    let Imagem = document.getElementById("Imagem");
    let Nome = document.getElementById("Nome");
    let Nota = document.getElementById("Nota");
    let Desenvolvedora = document.getElementById("Desenvolvedora");
    let Plataforma = document.getElementById("Plataforma");
    let Genero = document.getElementById("Genero");
    let Jogadores = document.getElementById("Jogadores");
    let Lancamento = document.getElementById("Lancamento");
    let Trailer = document.getElementById("Trailer");
    let Reviews = document.getElementById("Reviews");

    console.log("começando");
    let nome = prompt ("Qual jogo você deseja os dados?");
    fetch('http://localhost/Vapor/Jogos/'+nome)
    .then(
        response => response.json()
    )
    .then(
        data => {
            Imagem.src = data.Imagem;
            Nome.innerHTML = data.Nome;
            Nota.innerHTML = data.Nota;
            Desenvolvedora.innerHTML = data.Desenvolvedora;
            Plataforma.innerHTML = data.Plataforma;
            Genero.innerHTML = data.Genero;
            Jogadores.innerHTML = data.Jogadores;
            Lancamento.innerHTML = data.Lancamento;
            Trailer.src = data.Trailer;
            Reviews.innerHTML = data.reviews;
        }
    )
}         
