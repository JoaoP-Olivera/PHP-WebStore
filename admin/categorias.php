<?php include('../App/categorias_handler.php');?>
<?php
if(isset($_POST['enviar']) && $_POST['categoria']!= ""){
  $dado_enviado = filter_var($_POST['categoria'], FILTER_SANITIZE_SPECIAL_CHARS);
  $categorias = new categorias_handler($conexao_com_o_db);
  $dado_limpo = $categorias->conexao_com_categorias->real_escape_string($dado_enviado);
  $sql = "INSERT INTO categorias(nome) VALUES ('$dado_limpo')";
  $categorias->criar_categoria($sql);
} else{
  echo"<script> alert('O campo está vazio') </script>";
}




?>
<?php include('adminpartials/head.php');?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!-- Inserindo o Header-->
<?php include('adminpartials/header.php');?>

<!-- Conteudo Principal-->

  <!-- Coluna do lado esquerdo. contem o logo e a sidebar -->
  <?php include('adminpartials/aside.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <section class="content">
        <div class="col-sm-7">
    <form role="form" method="POST" action="categorias.php">
              <div class="box-body">
                <div class="form-group" >
                    <h1>Categorias</h1>
                  <label for="categoria">Categoria</label>
                  <input type="text" class="form-control" id="categoria" placeholder="Criar uma categoria" name="categoria">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="enviar">enviar</button>
              </div>
            </form>
        </div>
        </section>
    <!-- /.con