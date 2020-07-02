function pegarDados() {
    let foto = document.getElementById("foto");
    let nick = document.getElementById("usuario");
    let nome = document.getElementById("nome");
    let cidade = document.getElementById("cidade");
    let estado = document.getElementById("estado");
    let pais = document.getElementById("pais");
    let descriçao = document.getElementById("descriçao");

    console.log("começando");
    let usuario = prompt("Qual usuário você deseja os dados?");
    fetch('https://api.github.com/users/'+usuario)
    .then(
        response => response.json()
    )
    .then(
        data => {
            foto.src = data.avatar_url;
            cidade.innerHTML = data.followers;
            estado.innerHTML = data.type;
            pais.innerHTML = data.following;
            descriçao.innerHTML = data.created_at;
            nick.innerHTML = data.login;
            nome.innerHTML = data.nome;
        }
    )
}         
