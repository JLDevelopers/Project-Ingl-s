<?php 
    include_once("config/url.php");
    include_once("config/process.php");

    // limpa a mensagem
//     if(isset($_SESSION['msg'])) {
//     $printMsg = $_SESSION['msg'];
//     $_SESSION['msg'] = '';
//   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PagSys</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body> 
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
            <img src="<?= $BASE_URL ?>img/logo.png" alt="Livros">
        </a>
        <div>
            <div class="navbar-nav">
                <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Início</a>
                <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>client.php">Clientes</a>
                <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>produto.php">Cursos</a>
                <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>pag.php">Pagamentos</a>
                <ul class="navbar-nav-nav">
                    <li class="nav-item">
                        <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                    </li>
                </ul>
        </div>
        </nav>
    </header>
    <?php if(!empty($flassMessage["msg"])): ?>
        <div class="msg-container">
            <p class="msg <?= $flassMessage["type"] ?>"><?= $flassMessage["msg"] ?></p>
        </div>
    <?php endif; ?>