<?php
//Incluir arquivos de configuraoes
require_once '../configuracao.php';

//Classe que representa um usuário
class Usuario{
    //cadastrar um novo usuario
    public static function cadastrar($nome,$email,$senha){
        global $pdo;

        //gera uma hash de senha criptografia
        $hashSenha = password_hash($senha, PASSWORD_DEFAULT);

        //prepara paraa consulta sql passando os valores de view 
        $stmt = $pdo->prepare("INSERT INTO usuarios(nome, email, senha)
        VALUES (?,?,?) ");

        //executar a consulta  sql enviando os valores
        if($stmt->execute([$nome,$email,$hashSenha])){
            //se tudo der certo
            return true;
        }else{
            //se deu ruim
            return"ERRO ao cadastrar o usuário, tene novamente";
        }
    }
}