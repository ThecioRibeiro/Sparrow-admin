<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<!--http://localhost/myPHP/views/admin/"nome do arquivo".php-->
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <?php require_once("dist/css/css.php");?>

  <title>My PHP | Home</title>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <?php require_once("layout/navbar.php");?>

    <?php require_once("layout/mainSidebar.php");?>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Categorias de Eventos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Categorias de Eventos</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <button class="btn btn-primary"><i class="fas fa-plus"></i> Nova categoria</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">


                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th style="width: 40px">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      require_once realpath(dirname(__FILE__).'/src/models/categoriaModel.php');

                      $listaCategorias = CategoriaModel::listarTodos();

                      foreach ($listaCategorias as $categoria) {
                        echo "<tr>
                        <td>".$categoria['id_categoria']."</td>
                        <td>".$categoria['nome']."</td>
                        <td>".$categoria['status']."</td>
                        <td><span class='badge badge-success'>Success</span></td>             
                        <tr>";  
                      }

                      

                      ?>
                      
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>

    <?php require_once("layout/controlSidebar.php");?>

    <?php require_once("layout/footer.php");?>
  </div>

  <!-- REQUIRED SCRIPTS -->
  <?php require_once("dist/js/javascript.php");?>

</body>

</html>