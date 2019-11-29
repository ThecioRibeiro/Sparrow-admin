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
                            <h1 class="m-0 text-dark">Cadastrar Fornecedor</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active"><a href="fornecedor.php">Fornecedores</a></li>
                                <li class="breadcrumb-item">Cadastrar</li>
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
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Dados do fornecedor</h5>
                                </div>
                                <form role="form" name="formCadastrarFornecedor" action="processa_cadastro.php"
                                    method="POST">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Estabelecimento</label>
                                                    <div class="form-check">
                                                        <input id="pf" class="form-check-input" type="radio"
                                                            name="radio1">
                                                        <label for="pf" class="form-check-label">Pessoa física</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input id="pj" class="form-check-input" type="radio"
                                                            name="radio1">
                                                        <label for="pj" class="form-check-label">Pessoa jurídica</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="divTipoDocumento">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="divRazaoSocial">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="nome">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="divNomeFantasia">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="nomeFantasia">
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="divInscricaoEstadual">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="inscricaoEstadual">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2" id="">
                                                <div class="form-group">
                                                    <label for="cep">CEP</label>
                                                    <input id="cep" type="text" class="form-control cep" name="cep">
                                                </div>
                                            </div>
                                            <div class="col-md-4" id="">
                                                <div class="form-group">
                                                    <label for="rua">Logradouro</label>
                                                    <input id="rua" type="text" class="form-control" name="logradouro">
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="">
                                                <div class="form-group">
                                                    <label for="numero">Número</label>
                                                    <input id="numero" type="text" class="form-control"
                                                        data-mask="S00.0" name="numero">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3" id="">
                                                <div class="form-group">
                                                    <label for="bairro">Bairro</label>
                                                    <input id="bairro" type="text" class="form-control" name="bairro">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="">
                                                <div class="form-group">
                                                    <label for="cidade">Cidade</label>
                                                    <input id="cidade" type="text" class="form-control" name="cidade">
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="">
                                                <div class="form-group">
                                                    <label for="uf">UF</label>
                                                    <input id="uf" type="text" class="form-control" name="uf">
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="">
                                                <div class="form-group">
                                                    <label for="ibge">IBGE</label>
                                                    <input id="ibge" type="text" class="form-control" name="ibge">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2" id="">
                                                <div class="form-group">
                                                    <label for="telefone">Telefone</label>
                                                    <input id="telefone" type="text"
                                                        class="form-control phone_with_ddd" name="telefone">
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="">
                                                <div class="form-group">
                                                    <label for="celular">Celular</label>
                                                    <input id="celular" type="text" class="form-control cel" name="celular">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        <button type="reset" class="btn btn-link">Limpar formulario</button>
                                    </div>
                                </form>
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
    <script src="dist/js/pages/fornecedor/fornecedor_incluir.js"></script>
    <script src="dist/js/viacep.js"></script>
    <script src="dist/js/meuImputMask.js"></script>


</body>

</html>