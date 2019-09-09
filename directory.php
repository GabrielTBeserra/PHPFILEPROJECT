<?php
class CreateDirectory
{
    private $dir;
    private $text;
    private $filename;

    public function __construct($directory, $filename, $text)
    {
        $this->dir = dirname(__FILE__)."/users/".$directory;
        $this->filename = dirname(__FILE__)."/users/".$directory."/".$filename.".txt";
        $this->text = $text;
    }



    public function create(){
        if (is_dir($this->dir)) {
            new CreateFile($this->filename , $this->text);
           
        } else {
            if (mkdir($this->dir, 0777)) {
                new CreateFile($this->filename , $this->text);
            } else {
                new CreateFile($this->filename , $this->text);
            }
        }
    }
}
