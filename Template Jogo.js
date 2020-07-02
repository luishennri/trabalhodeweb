function pegarDados() {
    let foto = document.getElementById("foto");
    let nomejogo = document.getElementById("nome");
    let nota = document.getElementById("nota");
    let desenvolvedora = document.getElementById("desenvolvedora");
    let plataforma = document.getElementById("plataforma");
    let genero = document.getElementById("genero");
    let jogadores = document.getElementById("jogadores");
    let datala = document.getElementById("data");
    let trailer = document.getElementById("trailer");
    let reviews = document.getElementById("reviews");

    console.log("começando");
    let nome = prompt("Qual usuário você deseja os dados?");
    fetch(''+nome)
    .then(
        response => response.json()
    )
    .then(
        data => {
            foto.src = data.foto;
            nomejogo.innerHTML = data.nomejogo;
            nota.innerHTML = data.nota;
            desenvolvedora.innerHTML = data.desenvolvedora;
            plataforma.innerHTML = data.plataforma;
            genero.innerHTML = data.genero;
            jogadores.src = data.jogadores;
            datala.innerHTML = data.datala;
            trailer.src = data.trailer;
            reviews.innerHTML = data.reviews;
        }
    )
}         
