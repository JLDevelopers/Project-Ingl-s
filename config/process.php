<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  // MODIFICAÇÕES NO BANCO
  if(!empty($data)) {

    // CRIAR CONTATO
    if($data["type"] === "create") {
      
      $nome_cliente = $data["nome_cliente"];
      $validade_cliente = $data["validade_cliente"];
      $status_cliente = $data["status_cliente"];
      $CPF_cliente = $data["CPF_cliente"];
      $email_cliente = $data["email_cliente"];
      $fone_cliente = $data["fone_cliente"];
      $endereco_cliente = $data["endereco_cliente"];

      $query = "INSERT INTO cliente (nome_cliente, validade_cliente, status_cliente, CPF_cliente, email_cliente, fone_cliente, endereco_cliente, admin_id_admin, login_usuario_codigo_cliente)
      SELECT 
          :nome_cliente, 
          :validade_cliente, 
          :status_cliente, 
          :CPF_cliente, 
          :email_cliente, 
          :fone_cliente, 
          :endereco_cliente, 
          admin.id_admin, 
          login_usuario.codigo_cliente
      FROM 
          admin,
          login_usuario
      LIMIT 1;
      ";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":nome_cliente", $nome_cliente);
      $stmt->bindParam(":validade_cliente", $validade_cliente);
      $stmt->bindParam(":status_cliente", $status_cliente);
      $stmt->bindParam(":CPF_cliente", $CPF_cliente);
      $stmt->bindParam(":email_cliente", $email_cliente);
      $stmt->bindParam(":fone_cliente", $fone_cliente);
      $stmt->bindParam(":endereco_cliente", $endereco_cliente);

      try {

        $stmt->execute();
        // $_SESSION["msg"] = "Cliente criado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }
    } else if($data["type"] === "edit") {

      $nome_cliente = $data["nome_cliente"];
      $validade_cliente = $data["validade_cliente"];
      $status_cliente = $data["status_cliente"];
      $CPF_cliente = $data["CPF_cliente"];
      $email_cliente = $data["email_cliente"];
      $fone_cliente = $data["fone_cliente"];
      $endereco_cliente = $data["endereco_cliente"];
      $codigo_cliente = $data["codigo_cliente"];

      $query = "UPDATE cliente
                SET nome_cliente = :nome_cliente, validade_cliente = :validade_cliente, status_cliente = :status_cliente, CPF_cliente = :CPF_cliente, email_cliente = :email_cliente, fone_cliente = :fone_cliente, endereco_cliente = :endereco_cliente
                WHERE codigo_cliente = :codigo_cliente";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":nome_cliente", $nome_cliente);
      $stmt->bindParam(":validade_cliente", $validade_cliente);
      $stmt->bindParam(":status_cliente", $status_cliente);
      $stmt->bindParam(":CPF_cliente", $CPF_cliente);
      $stmt->bindParam(":email_cliente", $email_cliente);
      $stmt->bindParam(":fone_cliente", $fone_cliente);
      $stmt->bindParam(":endereco_cliente", $endereco_cliente);
      $stmt->bindParam(":codigo_cliente", $codigo_cliente);

      try {

        $stmt->execute();
        // $_SESSION["msg"] = "Cliente atualizado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }
    } else if($data["type"] === "delete") {

      $codigo_cliente = $data["codigo_cliente"];

      $query = "DELETE FROM cliente WHERE codigo_cliente = :codigo_cliente";

      $stmt = $conn->prepare($query);

      $stmt->bindParam("codigo_cliente", $codigo_cliente);

      try {

        $stmt->execute();
        // $_SESSION["msg"] = "Cliente removido com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }
    }

    // REDICT HOME
    header("Location:" . $BASE_URL . "../client.php");

  } else {
    $codigo_cliente;
  
    if(!empty($_GET)) {
      $codigo_cliente = $_GET["codigo_cliente"];
    }
    // RETORNA DADO DE UM CLIENTE
    if(!empty($codigo_cliente)) {
      $query = "SELECT * FROM cliente WHERE codigo_cliente = :codigo_cliente";
  
      $stmt = $conn->prepare($query);
  
      $stmt->bindParam(":codigo_cliente", $codigo_cliente);
  
      $stmt->execute();
  
      $cliente = $stmt->fetch();
  
    } else {
      // RETORNA TODOS OS CLIENTES
      $cliente = [];
    
      $query = "SELECT * FROM cliente";
    
      $stmt = $conn->prepare($query);
    
      $stmt->execute();
    
      $cliente = $stmt->fetchAll();
    }
  }
  // FECHAR CONEXÃO
  // $conn = null;