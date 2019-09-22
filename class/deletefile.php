<?php

$dir = $_POST['dir'];
$filename = $_POST['filename'];

$fileToDelete = dirname(__FILE__)."/users/".$dir."/".$filename;
$fileVerification = dirname(__FILE__)."/users/".$dir;



if (unlink($fileToDelete)){
    echo "Apagou";
}

if(is_dir($fileVerification)){
    $filesCount = scandir($fileVerification);
    if (sizeof($filesCount) == 2) rmdir($fileVerification);
}