<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
 <h1>Somar dois valores</h1>
    <form method="GET">

      <label>Primero valor </label> 
     <input type="number" name="valor 1" required>
    
      <br><br>

     <label>Segundo valor </label> 
     <input type="number" name="valor 2" required>
    
      <br><br>
     <button type="submit">Somar</button>
    </form>
    <?php 
    if (isset($_GET["valor1"]) && isset($_GET[valor2])) {
    $valor1 = $_GET["valor1"];
    $valor2 = $_GET["valor2"];

    $soma = $valor1 + $valor2;
    
    echo "<h2> O resultado da soma é: $soma</h2>;

 }
    ?>
</body>
</html>