<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>FILMCARD</title>

</head>

<body>

<div class="formulario">

    <h3>Cadastro de Filmes no Formulário</h3>

    <form method="POST" action="filme_card.php">

        <input type="text" name="nome" placeholder="Informe o nome do filme: ">

        <br><br>

        <input type="text" name="nomeDiretor" placeholder="Informe o nome do diretor do filme: ">

        <br><br>

        <input type="number" name="anoEstreia" placeholder="Informe o ano de estreia do filme: ">

        <br><br>

        <input type="text" name="img" placeholder="Informe o link do poster do filme: ">

        <br><br><button type="submit">Enviar</button>

    </form>

</div>
    
</body>

</html>