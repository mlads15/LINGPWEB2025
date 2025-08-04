<?php

require_once(__DIR__ . "/../../controller/CursoController.php");

$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
// print_r($cursos);

    include_once(__DIR__ . "/../include/header.php");

?>

<h3>Inserir Alunos</h3>

<form method="post" action="">

    <div>

        <label for="">Nome:</label>
        <input type="text" id="txtNome" name="nome" placeholder="Informe o nome:">

    </div>

    <div>

        <label for="">Idade:</label>
        <input type="number" id="txtIdade" name="idade" placeholder="Informe a idade:">

    </div>

    <div>

        <label for="selEstrang">Estrangeiro:</label>
        <select name="selEstrang" id="selEstrang">

            <option value="">-----Selecione-----</option>
            <option value="S">Sim</option>
            <option value="N">Não</option>

        </select>

    </div>

    <div>

        <label for="curso">Curso:</label>
        <select name="curso" id="curso">

            <option value="">-----Selecione-----</option>

            <?php foreach($cursos as $c): ?>
                
                <option value="<?= $c->getId() ?>"><?= $c->getNome() ?> </option>

            <?php endforeach; ?>

        </select>

    </div>

    <button type="submit">Gravar</button>

</form>

<div>

    <a href="listar.php">Voltar</a>

</div>

<div >

    <a href=""></a>

</div>

<?php

    include_once(__DIR__ . "/../include/footer.php");

?>