<?php
//imcluir o arquibo d configuração principal do projeto
require_once '../configuracao.php';

//incluir o modelo 'usuario' que contem as regras de negocios
//contem os comandos para cadastrar, login

require_once'../modelos/Usuario.php';

//verificar se a requisição fpo deita usnaod o metodo post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //obtem a acao paassad no fomrulario, como 'cadastrar' ou 'login'
    $acao = $_POST['acao'];

    // se a acao for "cadastrar" exeuta o fluxo de cadastro de usuario
    if($acao == 'cadastrar'){
        //obtrem os dados enviados pelo formulario de cadastro
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //chama p metodo caadsatrar da classe usuario que esta no modelo usuario
        $resultado = Usuario::cadastrar($nome,$email,$senha);
        //se o cadaastro for bem suceddo retorna true
        if($resultado === true){
            //redireciona o usuario para a pagina de login com uma mensagem
            header("Location: ". BASE_URL. "visoes/login.php?msg=Cadastro");

        }else{
            header("Location: ".BASE_URL."visoes/login.php?msg=ERRO!");
        }
    }
}