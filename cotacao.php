
<?php  

	// Ler o XML
$moeda = simplexml_load_file("http://developers.agenciaideias.com.br/cotacoes/xml"); // Carrega o XML
	
	//Acessa o objeto

$cotacao = $moeda->dolar->cotacao; 
$variacao = $moeda->dolar->variacao;

        // Saída
 echo " Olá anderson, a cotação do Dolar para hoje está".$cotacao." com variação de: ".$variacao."<br>";	
	
 ?>
