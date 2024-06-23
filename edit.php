<?php 
    include_once("templates/header.php");
?>

    <?php include_once("templates/backbtn.html"); ?>
    <div class="tree-container" id="view-contact-container">
        <h1 id="tree-title">Editar cliente</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="codigo_cliente" value="<?= $cliente['codigo_cliente'] ?>">
            <div class="form-group">
                <label for="nome_cliente">Nome do cliente:</label>
                <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" placeholder="Digite o nome" value="<?= $cliente['nome_cliente'] ?>" required>
            </div>
            <div class="form-group">
                <label for="validade_cliente">Validade:</label>
                <input type="text" class="form-control" id="validade_cliente" name="validade_cliente" placeholder="Digite a validade" value="<?= $cliente['validade_cliente'] ?>" required>
            </div>
            <div class="form-group">
                <label for="status_cliente">Status:</label>
                <input type="text" class="form-control" id="status_cliente" name="status_cliente" placeholder="Digite o status" value="<?= $cliente['status_cliente'] ?>" required>
            </div>
            <div class="form-group">
                <label for="CPF_cliente">CPF:</label>
                <input type="text" class="form-control" id="CPF_cliente" name="CPF_cliente" placeholder="Digite o CPF" value="<?= $cliente['CPF_cliente'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email_cliente">Email:</label>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente" placeholder="Digite o email" value="<?= $cliente['email_cliente'] ?>" required>
            </div>
            <div class="form-group">
                <label for="fone_cliente">Telefone:</label>
                <input type="text" class="form-control" id="fone_cliente" name="fone_cliente" placeholder="Digite o telefone" value="<?= $cliente['fone_cliente'] ?>" required>
            </div>
            <div class="form-group">
                <label for="endereco_cliente">Endereço:</label>
                <input type="text" class="form-control" id="endereco_cliente" name="endereco_cliente" placeholder="Digite o endereço" value="<?= $cliente['endereco_cliente'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

<?php 
    include_once("templates/footer.php");
?>