<?php 
class CriarArquivoXml{

	public static function conteudoXml($array_dados,$elemento_pai,$elementos_filho){

		$xml="";
		$xml.= '<?xml version="1.0" encoding="utf-8"?>';

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

?>