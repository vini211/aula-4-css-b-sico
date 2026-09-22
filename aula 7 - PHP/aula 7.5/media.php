<?php 
        if (isset($_GET["Nome"]) && isset($_GET["nota1"]) && isset($_GET[nota2]) && isset($_GET["nota3"])) {
        $Nome = $_GET["Nome"];
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $nota3 = $_GET["nota3"];

        $media = ($nota1 + $notar2 + $nota3) / 3;

        $situação = ($media >=6) ? "Aprovado" : "Reprovado" ;

        echo "<h2>Aluno: $Nome </h2>";
        echo "<h2>Média: $media </h2>";
        echo "<h2>Situação: $situação </h2>";
    
        

     }

     ?>