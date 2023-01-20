<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<?php

use sistema\Nucleo\Mensagem;
use sistema\Nucleo\Helpers;

require_once 'sistema/configuracao.php';
include_once 'sistema/Nucleo/Helpers.php';
include './sistema/Nucleo/Mensagem.php'; 



// $msg = new Mensagem();
// echo $msg ->erro('Mensagem de erro')->renderizar();
// echo $msg ->alerta('Mensagem de alerta')->renderizar();
// echo $msg ->informa('Mensagem de informação')->renderizar();
// echo $msg ->sucesso('Mensagem de sucesso')->renderizar();

// echo (new Mensagem())->erro('Mensagem de erro')->renderizar();

// echo(new Mensagem)->alerta('texto de alerta');

// $helper = new Helpers();
// echo $helper->validarCpf('45664564');

// echo Helpers::limparNumero('123156454dhuashdas455');

echo Helpers::saudacao();
echo '<hr>';
