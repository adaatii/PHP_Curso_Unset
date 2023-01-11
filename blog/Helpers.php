<?php

function saudacao(): string
{
    $hora = date('H');
    
    if($hora >= 5 && $hora <= 12){
        $saudacao = 'Bom dia';
    }else if($hora > 12 && $hora <= 18){
        $saudacao = 'Boa tarde';
    }else{
        $saudacao = 'Boa noite';
    }
    
    return $saudacao;
}

function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{

    $textoLimpo = trim($texto);
    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo,0, mb_strrpos(mb_substr($textoLimpo,0 , $limite), ''));
    return $resumirTexto.$continue;
}

?>