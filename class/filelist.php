<?php

class Files {
    private $dir;
    
    public function __construct()
    {
        $this->dir = dirname(__FILE__)."/users/";
    }

    public function getDirs(){
        if(is_dir($this->dir)){
            $lines = scandir($this->dir);
            return $lines;
        }
    }
    public function getFiles($dirname){
        $this->dir = dirname(__FILE__)."/users/" . $dirname;

        if(is_dir($this->dir)){
            $lines = scandir($this->dir);
            return $lines;
        }
    }       
}




