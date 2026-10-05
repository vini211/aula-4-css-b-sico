<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA AO CLIENTE</title>
</head>
<body>
    <h1>CONSULTA AO CLIENTE</h1>
<form method="post">
    Nome: <input type="text" name="nome"><br><br>
    Idade: <input type="number" name="idade"><br><br>
    Email: <input type="email" name="email"><br><br>
    Telefone: <input type="text" name="telefone"><br><br>
    Endereço: <input type="text" name="endereco"><br><br>

    <input type="submit" value="Cadastrar">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cliente = [
        "nome" => $_POST["nome"],
        "idade" => $_POST["idade"],
        "email" => $_POST["email"],
        "telefone" => $_POST["telefone"],
        "endereco" => $_POST["endereco"]
    ];

    echo "<h2>Dados cadastrados:</h2>";
    echo "Nome: " . $cliente["nome"] . "<br>";
    echo "Idade: " . $cliente["idade"] . "<br>";
    echo "Email: " . $cliente["email"] . "<br>";
    echo "Telefone: " . $cliente["telefone"] . "<br>";
    echo "Endereço: " . $cliente["endereco"] . "<br>";
}

?>