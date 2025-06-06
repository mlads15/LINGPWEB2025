<?php

require_once("util/Conexao.php");

$con = Conexao::getConexao();
// print_r($con);

//buscar os livros ja inseridos no banco de dados
$sql = "SELECT * FROM livros";
$stm = $con->prepare($sql);
$stm->execute();

$livros = $stm->fetchAll();
// echo "<pre>" . print_r($livros, true) . "</pre>";

$msgErro = "";
$titulo = "";
$autor = "";
$genero = "";
$qtdPag = "";

//verifica se o usuario ja cliclou no botao gravar

if(isset($_POST["titulo"])) {

    // echo "Já clicou no botão.";

    //obter os valores digitados pelo usuario
    $titulo = trim($_POST["titulo"]);

    //função TRIM remove os espaços de ums string, tanto no início quanto no final

    $genero = trim($_POST["genero"]);
    $qtdPag = $_POST["paginas"];
    $autor = $_POST["autor"];

    //validar os dados

    $erros = array();

    // ou if ($titulo == '')

    if (! $titulo) {

        array_push($erros, 'Informe o título!');

    } elseif(strlen($titulo) < 3 || strlen($titulo) > 50) {

        array_push($erros, 'O título deve ter entre três (3) e cinquenta (50) caracteres!');

    } else {

        $sql = "SELECT id FROM livros WHERE titulo = ?";
        $stm = $con->prepare($sql);
        $stm->execute([$titulo]);
        $results = $stm->fetchAll();

        if(count($results) > 0) {

            array_push($erros, 'Há um livro cadastrado com o mesmo título. Não é possível cadastrar a mesma obra mais de uma vez.');

        }

    }
    
    if (! $autor) {

        array_push($erros, 'Informe o autor!');

    }
    
    if (! $genero) {

        array_push($erros, 'Informe o gênero!');

    }
    
    if ($qtdPag == "") {

        array_push($erros, 'Informe o número de páginas!');

    } elseif($qtdPag <= 0) {

        array_push($erros, 'O número de páginas precisa ser maior que zero!');

    }

    if (count($erros) == 0) {

        // echo $titulo . " - " .  $genero . " - " . $qtdPag;

        //inserir as infos na base de dados

        $sql = "INSERT INTO livros (titulo, genero, qtd_paginas, autor)
                VALUES (?, ?, ?, ?)";
        $stm = $con->prepare($sql);
        $stm->execute(array($titulo, $genero, $qtdPag, $autor));
        // array ou []

        //redirecionar a mesma pagina afim de limpar o buffer do navegador
        header("location: index.php");

    } else {

        $msgErro = implode("<br>", $erros);
        // echo $msgErro;

    }

}

// if(strlen($titulo) < 3) {

//         echo "Utilize no minímo três (3) caracteres.";

// } elseif(strlen($titulo) > 50) {

//         echo "Utilize no máximo cinquenta (50) caracteres.";

// } else {

//         echo "Lacrou! Arrasou! Divou! Babilonicou!";

// }

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
        <th>Autor</th>
        <th>Excluir</th>

    </tr>

    <!-- COLOCA AQUI O RESTO DO CODIGO QUE A SARAH VAI MANDAR NO ZAAAAAAAAAAAAAAAP -->

     <?php
     
        foreach($livros as $l): ?>
            <tr>
                <td><?= $l["id"] ?></td>
                <td><?= $l["titulo"] ?></td>
                <td>
                    
                <?php
                
                if($l["genero"] == "D"){

                    echo "Drama";

                } elseif($l["genero"] == "R") {

                    echo "Romance";

                } elseif($l["genero"] == "F") {

                    echo "Ficção";

                } else {

                    echo "Outro";

                }
                
                ?></td>
                <td><?= $l["qtd_paginas"] ?></td>
                <td><?= $l["autor"] ?></td>
                <td><a href="excluir.php?id=<?= $l["id"] ?>"onclick="return confirm('Você confirma a exclusão desse livro da biblioteca? Essa ação não poderá ser alterada posteriormente.');">Excluir</a></td>
            </tr>

        <?php endforeach; ?>

</table>

<hr>

<h1>Formulário: </h1>

<!-- <form action="" method="post" 

onsubmit="return validacao()"> -->

<form action="" method="post">

    <div style="margin-bottom: 10px;">

        <label for="titulo">Título: </label>
        <input type="text" name="titulo" id="titulo" value="<?= $titulo ?>" />

    </div>

    <br>

    <div style="margin-bottom: 10px;">

        <label for="genero">Gênero: </label>
        <select name="genero" id="genero">

            <option value="">--- Selecione o Gênero ---</option>
            <option value="D" <?php 
            
            if($genero == "D") {

                echo "Selected.";

            }
            
            ?> >Drama</option>

            <option value="R" <?php 
            
            if($genero == "D") {

                echo "Selected.";

            }
            
            ?>>Romance</option>

            <option value="F" <?php 
            
            if($genero == "D") {

                echo "Selected.";

            }
            
            ?>>Ficção</option>

            <option value="O" <?php 
            
            if($genero == "D") {

                echo "Selected.";

            }
            
            ?>>Outro</option>

        </select>

    </div>

    <br>

    <div style="margin-bottom: 10px;">

        <label for="paginas">Páginas: </label>
        <input type="number" name="paginas" id="paginas">

    </div>

    <br>

    <div style="margin-bottom: 10px;">

        <label for="autor">Autor: </label>
        <input type="text" name="autor" id="autor" value="<?= $autor ?>">

    </div>

    <br>

    <div style="margin-bottom: 10px;">

        <button type="submit">Gravar</button>

    </div>

</form>

    <div id="divErros" style="margin-bottom: 20px; color: #FF0000; font-weight: bold; margin-top: 20px;">

    <?= $msgErro ?>

    </div>

<script src="js/validacao.js"></script>

<script src="js/caracteres.js"></script>

</body>

</html>