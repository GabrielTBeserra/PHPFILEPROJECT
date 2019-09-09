<?php
class CreateFile {
    public function __construct($filedir , $text)
    {
        $my_file = fopen($filedir,"w");
        fwrite($my_file, $text . PHP_EOL);
        fclose($my_file);
    }
}