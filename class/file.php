<?php
class File {
    private $text;
    private $filedir;
    private $file;

    //Classe responsavel em criar o arquivo com o conteudo do text area
    public function __construct($filedir , $text)
    {
        $this->text = $text;
        $this->filedir = $filedir;
    }
    // A mesma funcao que cria o arquivo com o texto la dentro e usado na edicao, pois
    // o arquivo e apenas substituido pelo novo com o novo texto
    public function create(){
        $this->file = fopen($this->filedir,"w");
        fwrite($this->file, $this->text);
        fclose($this->file);
    }
}