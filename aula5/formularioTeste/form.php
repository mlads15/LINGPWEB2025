<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>

</head>

<body>

    <h3>Cadastro de Pessoa</h3>

    <form method="POST" action="executa.php">

    <input type="text" placeholder="Informe seu nome:" name="nome">

    <br><br>

    <input type="number" placeholder="Informe sua idade:" name="idade">

    <br><br>

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>

    <!-- button possui tipo submit de inicio caso nao alterado -->
    <!-- dava pra fazer um if _post['name'] == null eu achoooo???? -->


    </form>
    
</body>

</html>
