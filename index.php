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
        <source src="https://youtube.googleapis.com/embed/?status=ok&hl=pt_BR&allow_embed=0&ps=docs&partnerid=30&autoplay=0&abd=0&docid=1IJAu8x89w0j33xayWWXMlDmZMRQ8MYXH&el=embed&title=HSR%20Wallpaper%20v3.mp4&BASE_URL=https%3A%2F%2Fdrive.google.com%2Fu%2F0%2F&iurl=https%3A%2F%2Flh3.googleusercontent.com%2Fdrive-storage%2FAJQWtBMVGWnPHpeFz-5-K0pfcnAhear90ZQ0yRoURIO4RCKuirzW_9Px0hVL1x5VbscU_J4sZiSL3ijUo-PsIBPsoyx7L-PVVxT4xZSG3sRx%3Ds512&cc3_module=1&reportabuseurl=https%3A%2F%2Fdrive.google.com%2Fu%2F0%2Fabuse%3Fauthuser%3D0%26id%3D1IJAu8x89w0j33xayWWXMlDmZMRQ8MYXH&token=1&plid=V0QXt4fhy3WHKA&timestamp=1708983986160&length_seconds=149&BASE_YT_URL=https%3A%2F%2Fdrive.google.com%2Fu%2F0%2F&cc_load_policy=1&authuser=0&wmode=window&override_hl=1&enablecastapi=0&pipable=1&enablepostapi=1&postid=drive-viewer-video-player-object-0&origin=https%3A%2F%2Fdrive.google.com" type="video/mp4">
    </video>
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