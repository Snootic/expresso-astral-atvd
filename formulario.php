<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça uma reserva</title>
    <link rel="shortcut icon" href="imagens/pom-pom.ico" />
</head>
<body>
<h1>Reserve uma viagem pelo Expresso Astral</h1>
    <h3>Preencha os dados abaixo</h3>
    <img src="https://media1.tenor.com/images/bead0ffe77a3fd513511c05dafb492e6/tenor.gif?itemid=18105609" alt="" width="200" height="200">
    <form>
        <label for="planeta-origem">Planeta de origem:</label>
        <input type="text" name="origem" id="planeta-origem"><p>
        <label for="planeta-destino">Planeta de destino:</label>
        <input type="text" name="desino" id="planeta-destino"><p>
        <label for="data-partida">Data de partida:</label>
        <input type="date" name="partida" id="data-partida"><p>
        <label for="quantidade-passagens">Quantidade de passagens:</label>
        <input type="number" name="passagens" id="quantidade-passagens"><p>
        <input type="submit" value="Reservar" onclick="popup_redirect()">
    </form>
    <script>
    function popup_redirect() {
        event.preventDefault();

        var origem = document.getElementById('planeta-origem').value;
        var destino = document.getElementById('planeta-destino').value;
        var data = document.getElementById('data-partida').value;
        var passagem = document.getElementById('quantidade-passagens').value;
        console.log(origem + destino + data + passagem)

        if (origem !== "" && destino !== "" && data !== "" && passagem !== "") {
            alert("Reserva feita com sucesso!");
            // window.location.href = "quem-somos.php";
        } else {
            alert("Por favor, preencha todos os campos.");
        }
    }
    </script>
</body>
<footer>
    <p>Voltar a página de cadastro</p>
    <p>Ir para página de reservas</p>
</footer>
</html>