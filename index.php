<link rel="stylesheet" href="css/estilo.css">
<?php
  //Adicionando o cabeçalho do site
	include_once('includes/cabecalho.php');

?>


	<!--Montando o menu lateral -->
    <div class="container-fluid">
      <div class="row">
	<?php
	  include_once('includes/menu_lateral.php');
	?>
	
	<!-- Inicio da area de conteudo -->
	<div class="corpo container-fluid">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Busca de NFs Legado</h1>
            
          </div>

          <br />
            <form method="post" action="cnpj.php">
              <div class="form-group row col md-10">
            	   <div class="col-md-2,5"><label><h6>Procurar pelo CNPJ do cliente :</h6></label></div>
            	   <div class="col-md-5"><input type="number" name="cnpj" class="form-control" required="required"/></div>
            	   <div class="col-md-2"><input type="submit" class="btn btn-primary" name="buscar" value="Buscar"></div>
            </div>
            </form>
          <br />
            <form method="post" action="numnota.php">
              <div class="form-group row col md-10">
                 <div class="col-md-2,5"><label><h6>Procurar pelo número da nota:</h6></label></div>
                 <div class="col-md-5"><input type="number" name="numnota" class="form-control" required="required"/></div>
                 <div class="col-md-2"><input type="submit" class="btn btn-primary" name="buscar" value="Buscar"></div>
                 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            </form>  
    </main>
  </div>          

            	
         
<?php
  //Adicionando o rodapé do site
	include_once('includes/rodape.php');
?>






