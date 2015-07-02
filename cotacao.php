
<?php  

$moeda = simplexml_load_file("http://developers.agenciaideias.com.br/cotacoes/xml");

	/*cotação dolar*/
$cotacao = $moeda->dolar->cotacao;
$variacao = $moeda->dolar->variacao;

 echo " Olá anderson, a cotação do Dolar para hoje está".$cotacao." com variação de: ".$variacao."<br>";	

	/*fim cotação dolar*/

	
 ?>