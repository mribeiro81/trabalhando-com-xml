SOBRE ESSE DIRETÓRIO
====================

##### O objetivo aqui é criar e ler um arquivo xml, no entanto, dentro das páginas há dicas de como, em vez de criar arquivo xml, fazer comunicação com um serviço web externo.

##### Muito utilizado em diveros tipos de aplicações, saber trabalhar com xml, assim como JSon, é fundamental.

##### Já trabalhei muito criando e/ou consumindo web services baseados em xml e, aqui eu mostro como criar e ler arquivo xml de forma simples e prática.

##### Certa vez fiz integração com uma API da Cielo via xml, que possibilitava que todos os sites da empresa pudessem realizar cobranças com cartões de crédito utilizando o web service que criei. O web service recebia dos sites os parâmetros a serem enviados para a Cielo, bem como, as informações do site que estava utilizando o serviço, desse modo, o web service registrava a transação na Cielo, gravava log da transação(dados recebidos, dados enviados, status de transação, códigos de erro, etc), e retornava os dados para o site onde o pagamento estava sendo realizado.

##### Para criar um arquivo xml, acesse o arquivo criar-xml.php. Esse arquivo executa a classe class-cria-xml.php, que cria propriamente o arquivo xml.

##### O arquivo ler-xml.php é o responśavel por ler e mostrar os dados do arquivo xml que foi criado na execução do arquivo criar.xml.php.




