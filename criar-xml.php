<?php 
require_once("class-cria-arquivo.php");

/*
Nesse exemplo crei um array para gerar o arquivo xml, mas, os dados podem vir do seu banco de dados.
*/
$array_dados= array();

$array_dados[0]["id_cliente"]= "1";
$array_dados[0]["nome_cliente"]= "Manoel";
$array_dados[0]["idade_cliente"]= "39";

$array_dados[1]["id_cliente"]= "2";
$array_dados[1]["nome_cliente"]= "Daniella";
$array_dados[1]["idade_cliente"]= "32";

$array_dados[2]["id_cliente"]= "3";
$array_dados[2]["nome_cliente"]= "Marisa";
$array_dados[2]["idade_cliente"]= "56";

$array_dados[3]["id_cliente"]= "4";
$array_dados[3]["nome_cliente"]= "João";
$array_dados[3]["idade_cliente"]= "64";


$elemento_pai = "clientes"; //Esse é o nome do elemento pai do arquivo xml que será criado
$elementos_filho = "cliente"; //Esse é o nome dos elementos filhos do arquivo xml que será criado
$nome_arquivo = "clientes.xml";

$conteudo_xml = CriarArquivoXml::conteudoXml($array_dados,$elemento_pai,$elementos_filho); //Criando o conteúdo do arquivo xml
/*
Com o conteúdo xml na variável $conteudo_xml, vou criar um arquivo xml.
Mas, em vez de criar um arquivo, eu poderia também disponibilizar esse conteúdo através de uma API, para ser acessado por domínios remotos. 
Quem precisasse acessar a API, poderia utilizar a biblioteca CURL do php ou a função $.ajax da biblioteca JQuery.
*/
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Trabalhando com xml</title>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/stylo.css" type="text/css" rel="stylesheet" /> 
</head>
<body>

	<header class="container header-background mt-1">

	    <div class="row justify-content-md-center">

	        <div class="col-sm">
	            <h2>Trabalhando com xml</h2>            
	        </div>

	    </div>

	</header>

	<main role="main" class="container mt-2">

		<div class="row">
			<div class="col-sm">
				<?php
				$arquivoXml = CriarArquivoXml::arquivoXml($nome_arquivo,$conteudo_xml); //Criando arquivo xml

				switch ($arquivoXml) {
					case ($arquivoXml > 0):
						$mensagem= '<div class="alert alert-success mt-4 mb-4" role="alert"><h2>Arquivo xml criado com sucesso.</h2>';
						$mensagem.= '<hr/>';
						$mensagem.= '<h5>Aproveite para visualizar o conteúdo xml que consta no arquivo criado.</h5>';
						$mensagem.= '<a href="ler-xml.php" target="_blank">Clique aqui para visualizar.</a></div>';
						echo $mensagem;
						break;			
					default:
						$mensagem= 'Erro ao criar arquivo xml.<br>';
						$mensagem.= 'Verifique se você tem permissão para criar arquivos no diretório.';
						echo $mensagem;
						break;
				}
				?>
			</div>	
		</div>	

		<div class="row">
			<div class="col-sm mb-4">
<pre class="mb-5">

Nesse exemplo crei um array para gerar o arquivo xml, mas, os dados poderiam vir 
de um banco de dados, de modo a possibilitar a criação do array de forma dinâmica.

$array_dados= array();

$array_dados[0]["id_cliente"]= "1";
$array_dados[0]["nome_cliente"]= "Manoel";
$array_dados[0]["idade_cliente"]= "39";

$array_dados[1]["id_cliente"]= "2";
$array_dados[1]["nome_cliente"]= "Daniella";
$array_dados[1]["idade_cliente"]= "32";

$array_dados[2]["id_cliente"]= "3";
$array_dados[2]["nome_cliente"]= "Marisa";
$array_dados[2]["idade_cliente"]= "56";

$array_dados[3]["id_cliente"]= "4";
$array_dados[3]["nome_cliente"]= "João";
$array_dados[3]["idade_cliente"]= "64";


$elemento_pai = "clientes"; //Esse é o nome do elemento pai do arquivo xml que será criado
$elementos_filho = "cliente"; //Esse é o nome dos elementos filhos do arquivo xml que será criado
$nome_arquivo = "clientes.xml";

Criando o conteúdo do arquivo xml.
$conteudo_xml = CriarArquivoXml::conteudoXml($array_dados,$elemento_pai,$elementos_filho); 

###########################################################################

Código da classe que cria o arquivo xml

class CriarArquivoXml{

	public static function conteudoXml($array_dados,$elemento_pai,$elementos_filho){

		$xml="";
		$xml.= '<&#63;xml version="1.0" encoding="utf-8"&#63;>';

		$xml.= "\n\t<".$elemento_pai.">\n";

		
			for($i = 0 , $size = count($array_dados); $size > $i; $i++){

				$xml.= "\t\t<".$elementos_filho.">\n";	

				foreach ($array_dados[$i] as $key => $value) {
				   	$xml.= "\t\t\t<".$key.">".$value."</".$key.">\n";
		    	}

		    	$xml.= "\t\t</".$elementos_filho.">\n";	
			
			}
		

		$xml.= "\t</".$elemento_pai.">\n";

		return $xml;

	}
	

	public static function arquivoXml($nome_arquivo,$conteudo_xml){

		//Criando o arquivo xml propriamente
		$fp = fopen($nome_arquivo,"w+"); 
		$retorno = fwrite($fp,$conteudo_xml);
		fclose($fp);

		if($retorno > 0){
			return true;
		}

		return false;

	}

}

###########################################################################

Com o conteúdo xml na variável $conteudo_xml, vou criar um arquivo xml.
Mas, em vez de criar um arquivo, eu poderia também disponibilizar esse 
conteúdo através de uma API, para ser acessado por domínios remotos. 
Quem precisasse acessar a API, poderia utilizar a biblioteca CURL do 
php ou a função $.ajax da biblioteca JQuery.

Criando arquivo xml
$arquivoXml = CriarArquivoXml::arquivoXml($nome_arquivo,$conteudo_xml); 

</pre>				

			</div>	
		</div>	
	</main>

</body>
</html>	