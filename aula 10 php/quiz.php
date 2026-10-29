<?php
$nome = $_POST["nome"] ?? "";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Perguntas do Quiz</title>
</head>
<body>

    <h1>Quiz de Conhecimentos</h1>

    <p>
        Participante:
        <?php echo htmlspecialchars($nome, ENT_QUOTES, "UTF-8"); ?>
    </p>

    <form action="resultado.php" method="POST">

        <input type="hidden" name="nome"
               value="<?php echo htmlspecialchars($nome, ENT_QUOTES, "UTF-8"); ?>">

        <h3>1. Em que data ocorreu a Independência do Brasil?</h3>

        <label><input type="radio" name="p1" value="A" required> A) 7 de setembro de 1822</label><br>
        <label><input type="radio" name="p1" value="B"> B) 15 de novembro de 1889</label><br>
        <label><input type="radio" name="p1" value="C"> C) 21 de abril de 1792</label><br>
        <label><input type="radio" name="p1" value="D"> D) 22 de abril de 1500</label><br>

        <h3>2. Quem é revelado como assassino no primeiro filme Sexta-Feira 13 (1980)?</h3>

        <label><input type="radio" name="p2" value="A" required> A) Jason Voorhees</label><br>
        <label><input type="radio" name="p2" value="B"> B) Pamela Voorhees</label><br>
        <label><input type="radio" name="p2" value="C"> C) Freddy Krueger</label><br>
        <label><input type="radio" name="p2" value="D"> D) Michael Myers</label><br>

        <h3>3. Quantos estados o Brasil possui, sem contar o Distrito Federal?</h3>

        <label><input type="radio" name="p3" value="A" required> A) 25</label><br>
        <label><input type="radio" name="p3" value="B"> B) 26</label><br>
        <label><input type="radio" name="p3" value="C"> C) 27</label><br>
        <label><input type="radio" name="p3" value="D"> D) 28</label><br>

        <h3>4. Qual cientista formulou as três leis do movimento e a lei da gravitação universal?</h3>

        <label><input type="radio" name="p4" value="A" required> A) Albert Einstein</label><br>
        <label><input type="radio" name="p4" value="B"> B) Galileu Galilei</label><br>
        <label><input type="radio" name="p4" value="C"> C) Isaac Newton</label><br>
        <label><input type="radio" name="p4" value="D"> D) Nikola Tesla</label><br>

        <h3>5. Até a Copa do Mundo masculina de 2022, quantos títulos mundiais as seleções latino-americanas haviam conquistado?</h3>

        <label><input type="radio" name="p5" value="A" required> A) 8 títulos</label><br>
        <label><input type="radio" name="p5" value="B"> B) 9 títulos</label><br>
        <label><input type="radio" name="p5" value="C"> C) 10 títulos</label><br>
        <label><input type="radio" name="p5" value="D"> D) 12 títulos</label><br>

        <h3>6. Qual destas animações aborda temas atuais como internet, tecnologia, identidade e isolamento social?</h3>

        <label><input type="radio" name="p6" value="A" required> A) Naruto</label><br>
        <label><input type="radio" name="p6" value="B"> B) Dragon Ball</label><br>
        <label><input type="radio" name="p6" value="C"> C) Neon Genesis Evangelion</label><br>
        <label><input type="radio" name="p6" value="D"> D) Serial Experiments Lain</label><br>

        <br>
        <button type="submit">Enviar respostas</button>

    </form>

</body>
</html>