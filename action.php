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
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Busca de NFs Legado</h1>
            
          </div>

          <br />
            <form method="post" class="form" action="modelo.php">
            	<label class="col-lg-1,5">Digite o CNPJ:</label>
            	<input type="number" name="cnpj" class="col-sm-4"/>
            	<input type="submit" name="buscar" value="Buscar">
            </form>

            <div class="col-md 10">
            	<table class='table table-dark table-striped table-bordered'>
            		<tr><th>Posição no diretório</th><th>Arquivo XML</th><th>Número da Nota</th></tr>
            	<?php
 				$cnpjdigi = $_POST['cnpj']; 
 					$n = 1;		
 					foreach (glob('notas/*.xml') as $xmlfile) {
 						$xml = simplexml_load_file($xmlfile);
 						$cnpj = $xml->infNFe->dest->CNPJ;
 						$nota = $xml->infNFe->ide->nNF;
 						if ($cnpj == $cnpjdigi){
 							echo "<tr><td>".$n."</td><td>".$xmlfile."</td><td>".$nota."</td></tr>";
 							}	
 							
 						$n++;
 				
 							//echo $cnpj."<br>";
 					} 	
 				?>	
 				</table>
            </div>
        </main>
	<!-- Fim da area de conteudo -->
   </div>
</div>

<?php
  //Adicionando o rodapé do site
	include_once('includes/rodape.php');
?>






