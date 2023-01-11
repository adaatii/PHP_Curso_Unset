<?php
//Arquivo responsável pela inicialização do sistema
//declare(strict_types = 1);
require_once 'sistema/configuracao.php';
include_once 'Helpers.php';

$texto = 'texto para resumir';

//Funções de string
/*echo $total = mb_strlen(trim($texto));
echo '<hr>';

echo $resumo = mb_substr($texto, 2, 15);
echo '<hr>';

echo $ocorrencia = mb_strrpos($texto, 'x');
*/
//var_dump($texto);
//echo '<hr>';
//echo saudacao();

echo '<hr>';
echo resumirTexto($texto, 10);

?>

