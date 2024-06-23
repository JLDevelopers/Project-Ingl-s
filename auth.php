<?php
  require_once("templates/header.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" integrity="sha512-i1b/nzkVo97VN5WbEtaPebBG8REvjWeqNclJ6AItj7msdVcaveKrlIIByDpvjk5nwHjXkIqGZscVxOrTb9tsMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <div id="main-container" class="container-fluid">
    <div class="col-md-12">
      <div class="row" id="auth-row">
        <div class="col-md-4" id="login-container">
          <h2>Entrar</h2>
          <form action="<?= $BASE_URL ?>auth_process.php" method="POST">
            <input type="hidden" name="type" value="login">
            <div class="form-group">
              <label for="usuario">Usuário:</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite seu nome de usuário">
            </div>
            <div class="form-group">
              <label for="senha_cliente">Senha:</label>
              <input type="password" class="form-control" id="senha_cliente" name="senha_cliente" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn card-btn" value="Entrar">Entrar</button>
          </form>
        </div>
        <div class="col-md-4" id="register-container">
          <h2>Criar Conta</h2>
          <form action="<?= $BASE_URL ?>auth_process.php" method="POST">
            <input type="hidden" name="type" value="register">
            <div class="form-group">
              <label for="usuario">Usuário:</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite seu nome de usuário">
            </div>
            <div class="form-group">
              <label for="nome_cliente">Nome:</label>
              <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label for="senha_cliente">Senha:</label>
              <input type="password" class="form-control" id="senha_cliente" name="senha_cliente" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
              <label for="confirmpassword">Confirmação de senha:</label>
              <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirme sua senha">
            </div>
            <button type="submit" class="btn card-btn">Registrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
  require_once("templates/footer.php");
?>
