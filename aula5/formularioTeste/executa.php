<?php

/*$nome = $_GET['nome'];
$idade = $_GET['idade'];*/

$nome = $_POST['nome'];
$idade = $_POST['idade'];

echo "Bem-vindo(a) " . $nome . " - " . $idade . " anos.";

echo "<br>";
echo "<a href='form.php'>Voltar</a>";

