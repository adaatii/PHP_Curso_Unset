<?php

function saudacao(): string{
    $hora = date('H');
    
    // if($hora >= 5 && $hora <= 12){
    //     $saudacao = 'Bom dia';
    // }else if($hora > 12 && $hora <= 18){
    //     $saudacao = 'Boa tarde';
    // }else{
    //     $saudacao = 'Boa noite';
    // }

    switch ($hora) {
        case $hora >= 5 && $hora <= 12:
            $saudacao = 'Bom dia';
            break;
        case $hora > 12 && $hora <= 18:
            $saudacao = 'Boa tarde';
            break;
        default:
            $saudacao = 'Boa noite';
            break;
    }
    
    return $saudacao;
}

/**
 * Resume um texto
 * 
 * @param string $texto texto para resumir.
 * @param int $limite quantidade de caracteres limite.
 * @param string $continue opcional - o que deve ser exibido ao final do resumo.
 * @return string texto resumido.
 */
function resumirTexto(string $texto, int $limite, string $continue = '...'): string{

    $textoLimpo = trim(strip_tags($texto));
    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo,0, mb_strrpos(mb_substr($textoLimpo,0 , $limite), ''));
    return $resumirTexto.$continue;
}

/**
 * Formata um valor.
 * @param string $valor
 * @return string valor formatado. Se $valor = null retorna 0.
 */
function formatarValor(float $valor = null): string{
    return number_format(($valor ? $valor : 0), 2, ',', '.');
}

/**
 * Formata um numero.
 * @param string $numero
 * @return string numero formatado. Se $numero = null retorna 0.
 */
function formatarNumero(string $numero = null): string{
    return number_format(($numero ? $numero : 0), 0, '.', '.');
}

/**
 * Conta o tempo decorrido de uma data.
 * @param string $data
 * @return string
 */
function contarTempo(string $data){
    $agora = strtotime(date('Y-m-d H:i:s'));
    
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segundos = $diferenca;
    $minutos = round($diferenca/60);
    $horas = round($diferenca/3600);
    $dias = round($diferenca/86400);
    $semanas = round($diferenca/604800);
    $meses = round($diferenca/2419200);
    $anos = round($diferenca/29030400);
    echo '<hr>';
    
    if ($segundos <= 60) {
        return 'agora';
    }elseif($minutos <= 60){
        return $minutos == 1 ? 'há 1minuto.': 'há '.$minutos.' minutos';
    }elseif ($horas <= 24) {
        return $horas == 1 ? 'há 1 hora.' : 'há '.$horas.' horas.';
    }elseif($dias <= 7) {
        return $dias == 1 ? 'há 1 dia.' : 'há '.$dias.' dias.';
    }elseif ($semanas <= 4) {
        return $semanas == 1 ? 'há 1 semana.' : 'há '.$semanas.' semanas.';
    }elseif ($meses <= 12) {
        return $meses == 1 ? 'há 1 mês.' : 'há '.$meses.' meses.';
    }else{
        return $anos == 1 ? 'há 1 ano.' : 'há '.$anos.' anos.';
    }
}

/**
 * Valida endereço de e-mail.
 * @param string $email
 * @return bool
 */
function validarEmail(string $email): bool{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Valida uma URL
 * @param string $url
 * @return bool
 */
function validarUrlComFiltro(string $url): bool{
    return filter_var($url, FILTER_VALIDATE_URL);
}

/**
 * Valida uma URL
 * @param string $url
 * @return bool
 */
function validarUrl(string $url): bool{
    if (mb_strlen($url) < 10) {
        return false;
    }
    if (!str_contains($url, '.')) {
        return false;
    }
    if (str_contains($url, 'http://') or str_contains($url, 'https://')) {
        return true;
    }

    return false;
}

function localhost(): bool {
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    if($servidor == 'localhost'){
        return true;
    }else {
        return false;
    }
}

function url(string $url): string{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

    if (str_starts_with($url, '/')) {
        return $ambiente.$url;
    }else {
        return $ambiente.'/'.$url;
    }   
}

function dataAtual(): string{
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n') - 1;
    $ano = date('Y');

    $nomesDiasDasemana = ['domingo','segunda-feira','terça-feira','quarta-feira','quinta-feira','sexta-feira','sábado'];

    $nomeDosMeses = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];

    $dataFormatada = $nomesDiasDasemana[$diaSemana].', '.$diaMes.' de '.$nomeDosMeses[$mes].' de '.$ano;

    return $dataFormatada;
}

/**
 * Gerar uma url amigável
 * @param string $string
 * @return string slug
 */
function slug(string $string): string {
    $mapa['a'] = 'ÁÉÍÓÚáéíóúÂÊÔâêôÀàÜüÇçÑñÃÕãõ“"‘!@#$%&*()_-+={[}]|\<,>.:;?/` ';
    $mapa['b'] = 'aeiouaeiouaeoaeoaauuccnnaoao                                ';
    $slug = strtr(utf8_decode($string), utf8_decode($mapa['a']), $mapa['b']);
    $slug = strip_tags(trim($slug));    
    $slug = str_replace(' ', '-', $slug);
    $slug = str_replace(['-----','----','---','--','-'], '-', $slug);
    return strtolower(utf8_decode($slug));
}