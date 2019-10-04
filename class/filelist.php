<?php

class Files {
    private $dir;
    
    // Classe responsavel por listar todas pastas e arquivos
    public function __construct()
    {
        $this->dir = dirname(__FILE__)."/users/";
    }
    // funcao responsavel em pegar todos diretorios de todos usuarios
    public function getDirs(){
        if(is_dir($this->dir)){
            $lines = scandir($this->dir);
            return $lines;
        }
    }

    // funcao resposnavel em pegar todos arquivos de um determinado codigo
    public function getFiles($dirname){
        $this->dir = dirname(__FILE__)."/users/" . $dirname;

        if(is_dir($this->dir)){
            $lines = scandir($this->dir);
            return $lines;
        }
    }       
}




