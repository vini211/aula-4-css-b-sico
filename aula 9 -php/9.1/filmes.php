<?php
$filmes = array(
    ["Filme" => "John Wick 4", "Genero" => "Ação"],
    ["Filme" => "Toy Story 5 ", "Genero" => "Animação"],
    ["Filme" => "Extermínio: O teplo dos ossos", "Genero" => "Terror"],
    ["Filme" => "Bugonia", "Genero" => "Ficção Científica"]
);


echo "Filmes de 2026:" . PHP_EOL;
echo $filmes[0]["Filme"] . " - " . $filmes[0]["Genero"] . PHP_EOL;
echo $filmes[1]["Filme"] . " - " . $filmes[1]["Genero"] . PHP_EOL;

?>