<?php

//var/www/html/LPW2025/aula0404/trabalhoSB/index.php

function linhaJogador(array $linha) {

    echo "<tr style='background-color: " . $linha["Cor"] . "'>";
    echo "<td>" . $linha["Número"] . "</td>";
    echo "<td>" . $linha["Nome"] . "</td>";
    echo "</tr>";
}

echo "<table border=1>";

echo "<tr>";

echo "<td>Número</td>";
echo "<td>Nome</td>";

echo "</tr>";

$jogador1 = array("Número" => 1, "Nome" => "Tafarel", "Cor" => "yellow");
$jogador2 = array("Número" => 2, "Nome" => "Jorginho", "Cor" => "green");
$jogador13 = array("Número" => 13, "Nome" => "Aldair", "Cor" => "yellow");
$jogador15 = array("Número" => 15, "Nome" => "Márcio Santos", "Cor" => "green");
$jogador6 = array("Número" => 6, "Nome" => "Branco", "Cor" => "green");
$jogador5 = array("Número" => 5, "Nome" => "Mauro Silva", "Cor" => "yellow");
$jogador8 = array("Número" => 8, "Nome" => "Dunga", "Cor" => "green");
$jogador17 = array("Número" => 17, "Nome" => "Mazinho", "Cor" => "yellow");
$jogador9 = array("Número" => 9, "Nome" => "Zinho", "Cor" => "yellow");
$jogador11 = array("Número" => 11, "Nome" => "Romário", "Cor" => "green");
$jogador7 = array("Número" => 7, "Nome" => "Bebeto", "Cor" => "yellow");

$jogadores = array($jogador1, $jogador11, $jogador13, $jogador15, $jogador17, $jogador2, $jogador5, $jogador6, $jogador7, $jogador8, $jogador9);

foreach ($jogadores as $j) {

    linhaJogador($j);
    
}