<?php


// recebe o nome da pasta e do arquivo que seram deletados atravez de post
$dir = $_POST['dir'];
$filename = $_POST['filename'];

// faz a busca pelo arquivo em questao
$fileToDelete = dirname(__FILE__)."/users/".$dir."/".$filename;
$fileVerification = dirname(__FILE__)."/users/".$dir;


// Apaga o arquivo
if (unlink($fileToDelete)){
    echo "Apagou";
}
// verifica se possui mais algum arquivo relacionado aquele codigo, caso nao existe ele exclui a pasta automaticamente
if(is_dir($fileVerification)){
    $filesCount = scandir($fileVerification);
    if (sizeof($filesCount) == 2) rmdir($fileVerification);
}