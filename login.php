<?php
require_once realpath(dirname(__FILE__).'/src/models/LoginModel.php');

if (isset($_POST['inputEmail']) and isset($_POST['inputSenha'])) {
  $login = LoginModel::logar($_POST);
if ($login->num_rows == 1) {
  $resultado = mysqli_fetch_assoc($login);
  session_start();
  $_SESSION['primeiro_nome'] = $resultado['primeiro_nome'];
  $_SESSION['segundo_nome'] = $resultado['segundo_nome'];
  $_SESSION['logado'] ='sim';
  header('location: index.php');
}

  var_dump($login);
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <?php require_once("dist/css/css.php");?>

  <title>My PHP | Login</title>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Sparrow</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Gerenciador do Sparrow</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input name="inputEmail" id="inputEmail" type="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="inputSenha" id="inputSenha" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Lembre me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


</div>

<!-- REQUIRED SCRIPTS -->
<?php require_once("dist/js/javascript.php");?>

</body>
</html>