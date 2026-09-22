<?php
if (isset($_GET["quantidade"]) && isset($_GET["valor"])) {

$quantidade= $_POST["quantidade"];
$valor= $_POST["valor"];

$total= $quantidade * $valor;

echo "<h2> a venda total é: R$ $total </h2>";

}

?>