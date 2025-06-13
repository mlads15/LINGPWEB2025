<?php

require_once("modelo/Personagem.php");
print "<link rel='stylesheet' href='style.css'>";

$nomePersonagem = $_POST['nomePersonagem'];
$caracPersonagem = $_POST['caracPersonagem'];
$personalidade = $_POST['personalidade'];
$img = $_POST['imgPersonagem'];


$Personagem = new Personagem($nomePersonagem,$caracPersonagem,$personalidade,$img);
print $Personagem;