<?php

require_once(__DIR__ . "/../../controller/AlunoController.php");   
require_once(__DIR__ . "/../../model/Aluno.php");   

//  receber os dados do formulário
if(isset($_POST['nome'])) {

    //  usuario ja clicou no gravar 

    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : NULL;
    $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : NULL;
    $estrangeiro = trim($_POST['selEstrang']) ? trim($_POST['selEstrang']) : NULL;
    $idCurso = is_numeric($_POST['curso']) ? $_POST['curso'] : NULL ;

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
    $erros = $alunoCont->inserir($aluno);

    if( ! $erros) {

        //redirecionar para o listar
        header("location: listar.php");

    } else {

        //converter o array de erros para string
        $msgErro = implode("<br>", $erros);
        echo $msgErro;

    }


}

include_once(__DIR__ . "/form.php");

?>