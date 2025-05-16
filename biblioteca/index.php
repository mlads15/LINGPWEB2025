<?php

require_once("util/Conexao.php");

$con = Conexao::getConexao();
// print_r($con);

//buscar os livros ja inseridos no banco de dados
$sql = "SELECT * FROM livros";
$stm = $con->prepare($sql);
$stm->execute();

$livros = $stm->fetchAll();
echo "<pre>" . print_r($livros, true) . "</pre>";


//verifica se o usuario ja cliclou no botao gravar

if(isset($_POST["titulo"])) {

    // echo "Já clicou no botão.";

    //obter os valores digitados pelo usuario
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $qtdPag = $_POST["paginas"];

    // echo $titulo . " - " .  $genero . " - " . $qtdPag;

    //inserir as infos na base de dados

    $sql = "INSERT INTO livros (titulo, genero, qtd_paginas)
            VALUES (?, ?, ?)";
    $stm = $con->prepare($sql);
    $stm->execute(array($titulo, $genero, $qtdPag));
    // array ou []
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Livros</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<h1>Listagem dos Livros</h1>

<table border="1">

    <tr>

        <th>ID</th>
        <th>Título</th>
        <th>Gênero</th>
        <th>Páginas</th>

    </tr>

    <!-- COLOCA AQUI O RESTO DO CODIGO QUE A SARAH VAI MANDAR NO ZAAAAAAAAAAAAAAAP -->

    <?php
        foreach ($livros as $l)
        {
            print <<<TEST
                <tr>
                    <td>{$l['id']}</td>
                    <td>{$l['titulo']}</td>
                    <td>{$l['genero']}</td>
                    <td>{$l['qtd_paginas']}</td>
                </tr>
            TEST;
        } 
        ?>

</table>

<hr>

<h1>Formulário:</h1>

<form action="" method="post">

    <div style="margin-bottom: 10px;">

        <label for="titulo">Título: </label>
        <input type="text" name="titulo" id="titulo">

    </div>

    <br>

    <div style="margin-bottom: 10px;">

        <label for="genero">Gênero: </label>
        <select name="genero" id="">

            <option value="">--- Selecione ---</option>
            <option value="D">Drama</option>
            <option value="R">Romance</option>
            <option value="F">Ficção</option>
            <option value="O">Outro</option>

        </select>

    </div>

    <br>


    <div style="margin-bottom: 10px;">

        <label for="paginas">Páginas: </label>
        <input type="number" name="paginas" id="paginas">

    </div>

    <br>

    <div style="margin-bottom: 10px;">

        <button type="submit">Gravar</button>

    </div>

</form>

</body>

</html>