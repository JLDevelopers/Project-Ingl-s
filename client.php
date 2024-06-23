<?php 
    include_once("templates/header.php");
?>
    <div class="container">
        <?php include_once("templates/backadic.html"); ?>
        <?php if(isset($printMsg) && $printMsg != ''): ?>
            <p id="msg"><?= $printMsg ?></p>
        <?php endif; ?>
        <h1 id="main-title">Meus clientes</h1>
        <?php if(count($cliente) > 0): ?>
            <table class="table" id="cliente-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Validade</th>
                        <th scope="col">Status</th>
                        <th scope="col"><img src="<?= $BASE_URL ?>img/icone-editar.png" alt="icone editar"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($cliente as $clientes): ?>
                        <tr>
                            <td scope="row" class="col-id"><?= $clientes['codigo_cliente']?></td>
                            <td scope="row"><?= $clientes['nome_cliente']?></td>
                            <td scope="row"><?= date("d/m/Y", strtotime($clientes['validade_cliente'])) ?></td>
                            <td scope="row"><?= $clientes['status_cliente']?></td>
                            <td class="actions">
                                <a href="<?= $BASE_URL ?>show.php?codigo_cliente=<?= $clientes['codigo_cliente']?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="<?= $BASE_URL ?>edit.php?codigo_cliente=<?= $clientes['codigo_cliente']?>"><i class="far fa-edit edit-icon"></i></a>
                                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="codigo_cliente" value="<?= $clientes["codigo_cliente"] ?>">
                                    <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach;?>   
                </tbody>
            </table>
        <?php else: ?>
            <p id="empty-list-text">Ainda não há clientes, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
        <?php endif; ?>
    </div>
<?php 
    include_once("templates/footer.php");
?>
