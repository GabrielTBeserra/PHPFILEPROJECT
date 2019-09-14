<?php
class File {
    private $text;
    private $filedir;

    public function __construct($filedir , $text)
    {
        $this->text = $text;
        $this->filedir = $filedir;
    }

    public function create(){
        my_file = fopen($this->filedir,"w");
        fwrite($this->my_file, $this->text . PHP_EOL);
        fclose($this->my_file);
    }
}