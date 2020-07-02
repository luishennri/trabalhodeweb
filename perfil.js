function pegarPerfil() {
    let Imagem = document.getElementById("Imagem");
    let Username = document.getElementById("Username");
    let Nome = document.getElementById("Nome");
    let Cidade = document.getElementById("Cidade");
    let Estado = document.getElementById("Estado");
    let Pais = document.getElementById("Pais");
    let Descricao = document.getElementById("Descricao");

    console.log("começando");
    let nome = prompt("Qual usuário você deseja os dados?");
    fetch('http://localhost/Vapor/Usuarios/'+nome)
    .then(
        response => response.json()
    )
    .then(
        data => {
            Imagem.src = data.Imagem;
            Cidade.innerHTML = data.Cidade;
            Estado.innerHTML = data.Estado;
            Pais.innerHTML = data.Pais;
            Descricao.innerHTML = data.Descricao;
            Username.innerHTML = data.Username;
            Nome.innerHTML = data.Nome;
        }
    )
}