



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
        <div class="row">
    <form role="form" method="POST" action="produtos.php">
              <div class="box-body">
                <div class="form-group">
                  <h1>Produtos</h1>
                  <label for="exampleInputEmail1">Produtos</label>
                  <input type="text" class="form-control" id="produtos" placeholder="insira o nome do produto" name="produtos">
                </div>
                <div class="form-group">
                  <label for="Preço">Preço</label>
                  <input type="text" class="form-control" id="preço" placeholder="preço" name="preço">
                </div>
                <div class="form-group">
                  <label for="foto">foto do produto</label>
                  <input type="file" id="foto">
                </div>
                <div class="form-group">
                  <label for="descricao">Descrição</label>
                  <textarea id="descrição" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="categorias">categorias</label>
                  <select id="categoria">
                    <option>Camisas</option>
                    <option>Calças</option>
                    <option>Sapatos</option>
                    <option>Acessórios</option>
                  </select>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
        </div>
        </section>
    <!-- /.content -->
  </div>
  <!--Incluindo o footer-->
  <?php include('adminpartials/footer.php');?>