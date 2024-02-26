<!DOCTYPE html>
<html lang="pt-BR">
<style>
    #video-background {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%; 
        min-height: 100%;
        z-index: -1;
        background-size: cover;
    }
    body{
        color: white;
        justify-content: center;
        display: grid;
        margin: auto;
        padding: auto ;
        text-align: center;
    }
    .container{
        background-color: rgba(100, 100, 100, 0.4);
        padding: 20px;
        margin-top:50px;
        outline: solid 1px white;
        border-radius: 5%;
        text-align: center;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="shortcut icon" href="imagens/pom-pom.ico" />
</head>
<body>
    <video autoplay muted loop id="video-background">
        <source src="imagens/astral-express.mp4" type="video/mp4">
    </video>
    <div class='container'>
        <h1>Expresso Astral</h1>
        <p>Faça um cadastro abaixo</p>
        <img src="https://64.media.tumblr.com/68308cc6e0f5b3faf8d1beb8b81d8675/7cc140a4ab9024c1-9f/s400x600/45808ead03e68d202f153ba4cb52672c4eed02fa.gif" alt="" width="300" height="300">
        <form>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"><p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"><p>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha"><p>
            <label for="confirmar_senha">Confirmar Senha:</label>
            <input type="password" name="confirmar_senha" id="confirmar_senha"><p>
            <input type="submit" value="Cadastrar" onclick="popup_redirect()">
        </form>
    </div>
    <script>
    function popup_redirect() {
        event.preventDefault();

        var nome = document.getElementById('nome').value;
        var email = document.getElementById('email').value;
        var senha = document.getElementById('senha').value;
        var confirmarSenha = document.getElementById('confirmar_senha').value;

        if (nome !== "" && email !== "" && senha !== "" && confirmarSenha !== "") {
            alert("Cadastrado com sucesso");
            window.location.href = "quem-somos.php";
        }else {
            alert("Por favor, preencha todos os campos.");
        }
    }
    </script>
</body>
</html>