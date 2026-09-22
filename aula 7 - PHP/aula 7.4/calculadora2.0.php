 <?php 
        if (isset($_GET["valor1"]) && isset($_GET[valor2]) && isset($_GET["valo3"])) {

        $valor1 = $_GET["valor1"];
        $valor2 = $_GET["valor2"];
        $valor3 = $_GET["valor3"];

        $soma = $valor1 + $valor2 + $valor3;

        echo "<h2> o ressultado da soma é: $soma</h2>";
    
        

     }

     ?>