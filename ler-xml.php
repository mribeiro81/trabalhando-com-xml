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

				<div class="alert alert-info mt-4">
					<h3>Veja abaixo o resultado da leitura do arquivo xml.</h3>
				</div>	

				<div class="alert mt-3">
					<?php 
						/*
						Lendo o arquivo xml
						*/

						if(file_exists("clientes.xml")){

							$arquivoXml = simplexml_load_file("clientes.xml");
							for($i = 0,$size = count($arquivoXml); $size > $i; $i++){
								echo $arquivoXml->cliente[$i]->id_cliente.", ".$arquivoXml->cliente[$i]->nome_cliente.", ".$arquivoXml->cliente[$i]->idade_cliente."<br>";
							}

						}
					?>
				</div>
			</div>	
		</div>	

		<div class="row">
			<div class="col-sm">
				<div class="alert alert-info mt-4">
					<h3>Veja abaixo o conteúdo do arquivo xml.</h3>
				</div>
<pre class="ml-4">

<&#63;xml version="1.0" encoding="utf-8"&#63;>
&#60;clientes>
	&#60;cliente>
		&#60;id_cliente>1<&#47;id_cliente>
		&#60;nome_cliente>Manoel<&#47;nome_cliente>
		&#60;idade_cliente>39<&#47;idade_cliente>
	&#60;/cliente>
	&#60;cliente>
		&#60;id_cliente>2<&#47;id_cliente>
		&#60;nome_cliente>Daniella<&#47;nome_cliente>
		&#60;idade_cliente>32<&#47;idade_cliente>
	&#60;/cliente>
	&#60;cliente>
		&#60;id_cliente>3<&#47;id_cliente>
		&#60;nome_cliente>Marisa<&#47;nome_cliente>
		&#60;idade_cliente>56<&#47;idade_cliente>
	&#60;/cliente>
	&#60;cliente>
		&#60;id_cliente>4<&#47;id_cliente>
		&#60;nome_cliente>João<&#47;nome_cliente>
		&#60;idade_cliente>64<&#47;idade_cliente>
	&#60;/cliente>
&#60;/clientes>

</pre>				
			</div>
		</div>		
	
	</main>

</body>
</html>	