<?php
$nome = $_POST["nome"] ?? "";

$respostasCorretas = [
    "p1" => "A",
    "p2" => "B",
    "p3" => "B",
    "p4" => "C",
    "p5" => "C",
    "p6" => "D"
];

$totalAcertos = 0;
$totalPerguntas = count($respostasCorretas);

foreach ($respostasCorretas as $pergunta => $respostaCorreta) {
    $respostaEscolhida = $_POST[$pergunta] ?? "";

    if ($respostaEscolhida === $respostaCorreta) {
        $totalAcertos++;
    }
}

$nota = $totalAcertos * 10;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Quiz</title>
</head>
<body>

    <h1>Resultado do Quiz</h1>

    <p>
        Participante:
        <?php echo htmlspecialchars($nome, ENT_QUOTES, "UTF-8"); ?>
    </p>

    <p>
        Você acertou
        <?php echo $totalAcertos; ?>
        de
        <?php echo $totalPerguntas; ?>
        perguntas.
    </p>

    <p>
        Sua nota foi:
        <?php echo $nota; ?> de 60 pontos.
    </p>

    <?php if ($totalAcertos === $totalPerguntas): ?>
        <p>Parabéns! Você acertou todas as perguntas!</p>
    <?php elseif ($totalAcertos >= 3): ?>
        <p>Bom trabalho! Você acertou pelo menos metade das perguntas.</p>
    <?php else: ?>
        <p>Continue estudando e tente novamente!</p>
    <?php endif; ?>

    <p><a href="index.html">Voltar ao início</a></p>

</body>
</html>