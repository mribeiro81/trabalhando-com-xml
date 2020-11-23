<?php 
require_once("class-cria-arquivo.php");

/*
Preparando os dados dos clientes para gerar o xml

Nesse exemplo crei um array para popular o arquivo xml, mas, os dados podem vir do seu banco de dados, de modo que o array pode ser criado de forma dinâmica.
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
Com o conteúdo xml na variável $conteudo_xml, você pode criar um arquivo xml - o que será feito abaixo.
Mas, eu poderia também enviar esse conteudo para um web service(URL remota). Para isso, eu utilizaria a biblioteca CURL do php(antes de utilizar a biblioteca CURL, verifique no seu phpinfo se a mesma já está habilitada, caso não, habilite).
*/


$arquivoXml = CriarArquivoXml::arquivoXml($nome_arquivo,$conteudo_xml); //Criando arquivo xml

switch ($arquivoXml) {
	case ($arquivoXml > 0):
		echo "<p>Arquivo xml criado com sucesso!</p>";
		echo "<p>Aproveite para visualizar o arquivo criado.</p>";
		echo "<p><a href='ler-xml.php' target='_blank'>Clique aqui para visualizar o arquivo</a></p>";
		break;
	
	default:
		echo "Erro ao criar arquivo xml."."<br>";
		echo "Verifique se você tem permissão para criar arquivos no diretório";
		break;
}


?>