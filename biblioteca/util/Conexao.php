<?php

class Conexao {

    private static $con = null;

    public static function getConexao() {
    // ao usar static, a funcao deixa de precisar da existencia de um objeto e parte a ser 
    // somente da classe, assim nao precisando de um objeto pra pegar seu valor
    // se usa SELF quando o atributo ou metodo pertence à classe e nao depende da criação de um objeto

    if(self::$con == null) {

        $opcoes = array(
            
            //Define o charset da conexão
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            //Define o tipo do erro como exceção
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
           //Define o tipo do retorno das consultas
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

        self::$con = new PDO("mysql:host=localhost;dbname=Biblioteca", "root", "1234", $opcoes);

    }

    return self::$con;

    }

}