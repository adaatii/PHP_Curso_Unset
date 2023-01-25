<?php

require 'vendor/autoload.php';
//require 'rotas.php';
use sistema\Nucleo\Conexao;
//use sistema\Nucleo\Helpers;


// $controlador = new Controlador('teste');
// echo '<hr>';
// var_dump($controlador);

// echo Helpers::saudacao();
// echo '<hr>';
// echo SITE_NOME;

// try {
//    Helpers::validarCpf('12312312312');
// } catch (\Exception $e) {
//     echo $e->getMessage();
// }

$con = Conexao::getInstancia();
