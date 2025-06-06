<?php

require_once("util/Conexao.php");

if(! isset($_GET['id'])) {

    echo "ID do livro não foi informado.";
    echo "<a href='index.php'> Voltar</a>";
    exit;

}

$id = $_GET['id'];

$sql = "DELETE FROM livros WHERE id = ?";
$con = Conexao::getConexao();
$stm = $con->prepare($sql);
$stm->execute([$id]);

header("location: index.php");
