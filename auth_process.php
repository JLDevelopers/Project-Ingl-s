<?php 
    
    require_once("config/connection.php");
    require_once("config/url.php");
    require_once("models/User.php");
    require_once("dao/UserDAO.php");
    require_once("models/Message.php");

    $message = new Message($BASE_URL);

    // VERIFICA O TIPO DO FORMULARIO
    $type = filter_input(INPUT_POST, "type");

    // VERIFICAÇÃO DO TIPO DE FORMULARIO
    if($type === "register") {

        $usuario = filter_input(INPUT_POST, "usuario");
        $nome_cliente = filter_input(INPUT_POST, "nome_cliente");
        $senha_cliente = filter_input(INPUT_POST, "senha_cliente");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

        // VERIFICAÇÃO DE DADOS MÍNIMOS
        if($usuario && $nome_cliente && $senha_cliente) {


        } else {
            // ENVIAR UMA MENSAGEM DE ERRO, DE DADOS FALTANTES
            $message->SetMessage("Por favor, preencha todos os campos.", "error", "back");
        }

    } else if($type === "login") {

    }
?>