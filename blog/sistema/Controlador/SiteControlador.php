<?php

namespace sistema\Controlador;

use sistema\Nucleo\Controlador;

class SiteControlador extends Controlador{
    
    public function __construct()
    {
        parent::__construct('templates/site/views');
    }
    
    
    public function index():void{
        echo $this->template->renderizar('index.html', [
            'titulo' => '',
            
        ]);
    }

    public function sobre():void{
        echo $this->template->renderizar('sobre.html', [
            'titulo' => 'teste de Sobre',
            
        ]);
    }

    public function teste():void{
        echo $this->template->renderizar('teste.html', [
            'titulo' => 'teste de Sobre',
            'subtitulo' => 'teste de Sobre'
        ]);
    }

    public function erro404():void{
        echo $this->template->renderizar('404.html', [
            'titulo' => 'Página não encontrada'                      
        ]);
    }

   
}