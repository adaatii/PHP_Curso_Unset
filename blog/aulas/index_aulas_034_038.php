<?php
require_once 'sistema/configuracao.php';
include_once 'Helpers.php';


// $meses = [2 => 'Janeiro', 1 =>'Fevereiro', 'Março'];

// foreach ($meses as $key => $value) {
//     echo $value.'<br>';
// }
// var_dump($meses);

// echo dataAtual();

// echo slug("Adão\"Negro\" - 2022").'<hr>';
// echo slug("Avatar 2: O caminho da Água").'<hr>';
// echo slug("Não! Não Olhe!").'<hr>';
// echo slug("Sonic 2 - O Filme").'<hr>';
// echo slug("NOVA SÉRIE NO DISNEY+!").'<hr>';
// echo slug("100 Melhores filmes").'<hr>';
// echo slug("teste!@####$6%%``").'<hr>';

// echo saudacao();

//Estruturas de repetição

// $numero = 1;

// while ($numero <= 10) {
//     echo $numero++;
// }

// for ($i=0; $i <= 10; $i++) { 
//    echo $i.' x '.$i.' = '.$i*$i.'<br>';
// }

$cpf = '123.456.789-10';


// echo $limparNumero = preg_replace('/[^0-9]/', '', $cpf);
 var_dump(validarCpf($cpf));
