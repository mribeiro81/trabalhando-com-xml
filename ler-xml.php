<?php 
/*
Antes de executar esse comando, certifique-se de ter rodado antes o arquivo criar-xml.php, para que seja criado no arquivo clientes.xml que será lido aqui
*/

if(file_exists("clientes.xml")){

	$arquivoXml = simplexml_load_file("clientes.xml");
	for($i = 0,$size = count($arquivoXml); $size > $i; $i++){
		echo "Id_cliente: ".$arquivoXml->cliente[$i]->id_cliente.", Nome Cliente: ".$arquivoXml->cliente[$i]->nome_cliente.", Idade Cliente: ".$arquivoXml->cliente[$i]->idade_cliente."<br>";
	}

}


?>