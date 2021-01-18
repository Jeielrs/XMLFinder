<?php
  //Adicionando o cabeçalho do site
	include_once('includes/cabecalho.php');

?>


	<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <span data-feather="search"></span>
                  Buscador 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="cnpj.php">
                  <span data-feather="file"></span>
                  NF's separadas por CNPJ <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#.php">
                  <span data-feather="file"></span>
                  NF's separadas pelo número
                </a>
              </li>
             
            </ul>

          </div>
        </nav>
	
	<!-- Inicio da area de conteudo -->
  
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Resultado da Pesquisa</h1>
            
          </div>

          <br />
            
            <div class="col-md 10">
            	<table class='table table-dark table-striped table-bordered table-center'>
            		<tr><th class='text-center'>#</th><th class='text-center'>Arquivo XML</th>
            		<th class='text-center'>Número da Nota</th><th class='text-center'>Link</th></tr>
            	<?php
 					$cnpjdigi = $_POST['cnpj']; 
 					$n = 1;		
 					foreach (glob('notas/*.xml') as $xmlfile) {
 						$xml = simplexml_load_file($xmlfile);
 						$cnpj = $xml->infNFe->dest->CNPJ;
 						$nota = $xml->infNFe->ide->nNF;
 						if ($cnpj == $cnpjdigi){
 							echo "<tr><td class='text-center'>".$n."</td><td class='text-center'>".$xmlfile."</td>
 								<td class='text-center'>".$nota."</td><td class='text-center'><a href='".$xmlfile."' target='_blank'>ABRIR</a></td></tr>";
 							$n++;
 							}	
 					}
          //if ($n=1) {
          //    echo "<h6>Não foi encontrada nenhuma nota com esse CNPJ ".$cnpjdigi."</h5>";              
          //}
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






