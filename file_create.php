<?php
$clientcode = $_POST['client-code'];
$filename = $_POST['file-name'];
$text = $_POST['text'];

$dir = dirname(__FILE__)."/users/".$clientcode;
$filedir = dirname(__FILE__)."/users/".$clientcode."/".$filename.".txt";


if(!is_dir(dirname(__FILE__)."/users")){
    mkdir(dirname(__FILE__)."/users/" , 0777);
}



if(is_dir($dir))
{
    $my_file = fopen($filedir,"w");
    fwrite($my_file, $text . PHP_EOL);
    fclose($my_file);
}
else {
    if(mkdir($dir,0777))
    {
        $my_file = fopen($filedir,"w"); //open file to write
        fwrite($my_file, $text . PHP_EOL);
        fclose($my_file);
    } else
    {
        $my_file = fopen($filedir,"w"); //open file to write
        fwrite($my_file, $text . PHP_EOL);
        fclose($my_file);
    }
}
