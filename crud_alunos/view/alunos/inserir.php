<?php

require_once(__DIR__ . "/../../controller/AlunoController.php");   
require_once(__DIR__ . "/../../model/Aluno.php");   

//  receber os dados do formulário
if(isset($_POST['nome'])) {

    //  usuario ja clicou no gravar 

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $estrangeiro = $_POST['selEstrang'];
    $idCurso = $_POST['curso'];

    //  criar um objeto aluno para persisti-lo

    $aluno = new Aluno();
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrangeiro);

    $curso = new Curso();
    $curso->setId($idCurso);
    $aluno->setCurso($curso);

    //  chamar o DAO para salvar o objeto aluno

    $alunoCont = new AlunoController();
    $alunoCont->inserir($aluno);

}

include_once(__DIR__ . "/form.php");

?>