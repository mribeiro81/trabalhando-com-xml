SOBRE ESSE DIRETÓRIO
====================

##### O objetivo aqui é criar e ler um arquivo xml, no entanto, dentro das páginas há dicas de como, em vez de criar arquivo xml, fazer comunicação com um serviço web externo.

##### Muito utilizado em diveros tipos de aplicações, saber trabalhar com xml, assim como JSon, é fundamental.

##### Já trabalhei muito criando e/ou consumindo web services baseados em xml e, aqui eu mostro como criar e ler arquivo xml de forma simples e prática.

##### Certa vez, tive que integrar um sistema a outro onde tive que utilizar muito xml. Veja...

###### O meu sistema precisava cadastrar clientes e enviar esse cadastro para outro sistema via web service xml. 

###### A forma de pagamento que o cliente definiu para o sistema foi boleto bancário. Ocorre que, por exigência do cliente(por questão contábil, se não me falha a memória), o boleto precisava ser registrado no sistema dele, não podia ser gerado no sistema em que eu trabalhava. Por essa razão, eu acessava o web service do cliente, gerava o boleto, pegava os dados do boleto gerado, gravava os dados recebidos, criava e exibia o link para o usuário do meu sistema acessar o boleto que foi criado na aplicação do cliente. 

###### O sistema utilizava baixa automática de pagamentos de boleto via CNAB. Sempre que a rotina de baixa de boletos era executada, o sistema acessava o sistema do cliente e marcava os boletos pagos.

##### Para criar um arquivo xml, acesse o arquivo criar-xml.php. Esse arquivo executa a classe class-cria-xml.php, que cria propriamente o arquivo xml.

##### O arquivo ler-xml.php é o responśavel por ler e mostrar os dados do arquivo xml que foi criado na execução do arquivo criar.xml.php.




