<!DOCTYPE html>
<html lang="en">
<style>
    body{
            background-image: url("imagens/herta-station.jpg");
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }
    .container{
            background-color: rgba(100, 100, 100, 0.4);
            padding: 20px;
            margin:50px;
            outline: solid 1px white;
            border-radius: 5%;
            text-align: center;
        }
        footer {
            background-color: rgba(100, 100, 100, 0.4);
            outline: solid 1px white;
            text-align: center;
            width: 100%;
            margin-top: 70px;
        }
        footer a{
            color: white; 
            text-decoration: none;
        }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça uma reserva</title>
    <link rel="shortcut icon" href="imagens/pom-pom.ico" />
</head>
<body>
    <div class='container'>
        <h1>Reserve uma viagem pelo Expresso Astral</h1>
            <h3>Preencha os dados abaixo</h3>
            <img src="https://static.wikia.nocookie.net/houkai-star-rail/images/a/a7/Item_Star_Rail_Special_Pass.png" alt="" width="200" height="200">
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
                } else {
                    alert("Por favor, preencha todos os campos.");
                }
            }
            </script>
    </div>
</body>
<footer>
    <p><a href="index.php">Voltar a página de cadastro</a>&emsp;&emsp;<a href="quem-somos.php">Quem somos?</a></p>
</footer>
</html>