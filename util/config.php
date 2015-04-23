<?php

//DEFINIR TIMEZONE PADRÃO
date_default_timezone_set("Brazil/East");

//OCULTAR OS WARNING DO PHP
//error_reporting(E_ALL ^ E_WARNING);
//ini_set("display_errors", 0 );

// DEFININDO OS DADOS DE ACESSO AO BANCO DE DADOS
define("DB",'mysql');
define("DB_HOST","localhost");
define("DB_NAME","avaliacao");
define("DB_USER","root");
define("DB_PASS","root");


// CONFIGURACOES PADRAO
// CONFIGURACAO DE CAMINHO
define("AVA_PORTAL_URL", 'http://localhost/avaliacao/');
define("AVA_PORTAL_URL_DASHBOARD", 'http://localhost/avaliacao/view/');
// define("TEMPLATE_FOLDER", 'http://localhost/avaliacao/view/template/');
// define("TEMA_FOLDER", 'http://localhost/avaliacao/tema/');
define("AVA_CSS_FOLDER", 'http://localhost/avaliacao/assets/css/');
// define("BS3_CSS_FOLDER", 'http://localhost/avaliacao/template/bs3/css/');
// define("BS3_JS_FOLDER", 'http://localhost/avaliacao/template/bs3/');
define("AVA_JS_FOLDER", 'http://localhost/avaliacao/assets/js/');
define("AVA_JS_PLUGIN_FOLDER", 'http://localhost/avaliacao/assets/plugin/');
define("AVA_JS_CUSTON_FOLDER", 'http://localhost/avaliacao/assets/custom/');
define("AVA_UTILS_FOLDER", 'http://localhost/avaliacao/util/');
// define("LOCALES_FOLDER", 'http://localhost/avaliacao/template/locales/');
define("AVA_IMAGEM_FOLDER", 'http://localhost/avaliacao/imagen/');
// define("LOGO_DASHBOARD", 'http://ssl.gstatic.com/gb/images/v1_b444d4f7.png');
// define("FAVICON", 'http://localhost/avaliacao/template/images/favicon.png');

// CONFIGURACAO DE UPLOAD E IMAGENS
// define("UPLOAD_FOLDER", 'uploads/');
define("SIZE_MINIATURA_W", '150');
define("SIZE_MINIATURA_H", '150');
define("SIZE_MEDIO_W", '300');
define("SIZE_MEDIO_H", '300');
define("SIZE_GRANDE_W", '1024');
define("SIZE_GRANDE_H", '1024');

// CONFIGURACAO DO METADADOS E TITULO DO PORTAL
define("TITULOPORTAL", 'KAMBO - AVALIAÇÃO WEB SYSTEM');
define("TITULO_DASHBOARD", 'KAMBO - AVALIAÇÃO WEB SYSTEM');
define("DESCRICAOPORTAL", 'Kambo - Avaliação Web System');
define ('DESENVOLVIMENTO', nl2br('Kambo Tecnologia e Sistemas LTDA'));

//CONFIGURACAO DE ENVIO DE E-MAIL
define ('EMAIL_NOME', 'Kambo');
define ('EMAIL_ENDERECO','contato@kambotecnologia.com.br');
define ('URL_ENDERECO','http://kambotencologia.com.br');
define ('EMAIL_TITULO','E-mail | Kambo');
define ('EMAIL_DESENVOLVIMENTO', nl2br('Developed by - KAMBO TECNOLOGIA E SISTEMAS LTDA'));

?>
