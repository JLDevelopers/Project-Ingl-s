<?php 
    include_once("templates/header.php");
?>
    <?php include_once("templates/backbtn.html"); ?>
    <div class="double-container" id="view-cliente-container">
    <h1 id="title"><?= $cliente['nome_cliente'] ?></h1>
    <div class="info">
    <p class="bold">Validade:</p>
    <p><?= date("d/m/Y", strtotime($cliente['validade_cliente'])) ?></p>
    </div>
    <div class="info">
        <p class="bold">Status:</p>
        <p><?= $cliente['status_cliente'] ?></p>
    </div>
    <div class="info">
        <p class="bold">CPF:</p>
        <p><?= $cliente['CPF_cliente'] ?></p>
    </div>
    <div class="info">
        <p class="bold">Email:</p>
        <p><?= $cliente['email_cliente'] ?></p>
    </div>
    <div class="info">
        <p class="bold">Telefone:</p>
        <p><?= $cliente['fone_cliente'] ?></p>
    </div>
    <div class="info">
        <p class="bold">Endereço:</p>
        <p><?= $cliente['endereco_cliente'] ?></p>
    </div>
</div>

<?php 
    include_once("templates/footer.php");
?>