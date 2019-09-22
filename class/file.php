<?php
class File {
    private $text;
    private $filedir;
    private $file;

    public function __construct($filedir , $text)
    {
        $this->text = $text;
        $this->filedir = $filedir;
    }

    public function create(){
        $this->file = fopen($this->filedir,"w");
        fwrite($this->file, $this->text . PHP_EOL);
        fclose($this->file);
    }
}