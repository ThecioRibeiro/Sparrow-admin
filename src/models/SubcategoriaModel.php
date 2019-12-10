<?php

require_once realpath(dirname(__FILE__,2).'/config/config.php');

class SubcategoriaModel{

  public static function listarTodos(){

    $conexao = Database::getConection();
    $sql = "SELECT subcategorias.id_subcategorias as id,
    subcategorias.nome as subcategorias,
    categorias.nome as categorias
    FROM subcategorias, categorias 
    WHERE subcategorias.id_subcategorias = categorias.id_categoria";
    $resultado = $conexao->query($sql) or die ("erro ao listar todas as subcategorias").mysql_error();

    if ($resultado) {
      return $resultado;
    } else {
      return false;
    }
    
  }

  public static function listarCategoriasModal(){

    $conexao = Database::getConection();
    $sql = "SELECT * FROM categorias";
    $resultado = $conexao->query($sql) or die ("erro ao listar todas as categorias").mysql_error();

    if ($resultado) {
      return $resultado;
    } else {
      return false;
    }
  }

  public function incluir($dados){
    var_dump($dados);
    $conexao = Database::getConection();
    $nome = $dados['txtNomeCategoria'];
    $idSubcategoria = $dados['idcategoria'];
    $novo = $conexao->prepare("INSERT INTO subcategorias (nome,id_categorias) VALUES(?,?)");
    $novo->bind_param('si', $nome, $idSubcategoria);
    $novo->execute();

    if ($novo->affected_rows > 0) {
      $id = mysqli_stmt_insert_id($novo);
      //header("Location: categorias.php");
      return $id;
    }else{
      return "Erro ao gravar dados";
    }
    

    
  }
  public function atualizar(){
    print_r('funcao incluir');
  }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $categoria = new SubcategoriaModel;
  var_dump($_POST);

  $acao  = ($_POST['acao']);

  if ($acao == "insert"){
      print_r("entrou insert");
      $categoria->incluir($_POST);
  } if ($acao == "update"){
      print_r("entrou update");
      $categoria->atualizar();
  }
  
  
}