<?php

require_once("modelo/Personagem.php");

$p1 = new Personagem("Pompompurin", "imagens/pompompurink.jpeg", "Gosta de comer pudim e sempre usa sua boininha marrom.");
$p2 = new Personagem("Keroppi", "imagens/keroppi.jpeg", "Gosta de esportes, como natação, e é muito aventureiro.");
$p3 = new Personagem("Badtz-Maru", "imagens/badtzmaru.jpeg", "É um bad boy que sonha em ser famoso.");

$personagens = [$p1, $p2, $p3];

$escolhido = rand(1, 3);

if (!isset($_GET['palpite'])) {
    echo "<p style='color:red;'>Erro: Você deve informar o parâmetro 'palpite'.</p>";
    exit;
}

$palpite = intval($_GET['palpite']);

if ($palpite < 1 || $palpite > 3) {

    echo "<p style='color:red;'>Palpite inválido. Escolha entre 1, 2 ou 3.</p>";
    exit;

}

if ($palpite === $escolhido) {

    $personagem = $personagens[$palpite - 1];
    echo "<h2>Parabéns! Você acertou!</h2>";
    echo "<p>Personagem: {$personagem->getNome()}</p>";
    echo "<img src='{$personagem->getImagem()}' alt='{$personagem->getNome()}' width='200'>";

} else {

    $correto = $personagens[$escolhido - 1];
    echo "<h2>Que pena, você errou!</h2>";
    echo "<p>Dica: {$correto->getDica()}</p>";
    echo "<p>Veja a imagem borrada do personagem correto:</p>";
    echo "<img src='{$correto->getImagem()}' style='filter: blur(5px);' width='200'>";

}


