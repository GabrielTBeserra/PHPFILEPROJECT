<?php

require_once 'file.php';
require_once 'dir.php';

$clientcode = $_POST['clientcode'];
$filename = $_POST['filename'];
$text = $_POST['text'];

$dir = dirname(__FILE__)."/users/".$clientcode;
$filedir = dirname(__FILE__)."/users/".$clientcode."/".$filename.".txt";


if(!is_dir(dirname(__FILE__)."/users")){
    mkdir(dirname(__FILE__)."/users/" , 0777);
}


$direcory = new Dir($clientcode , $filename , $text);
$direcory->create();
