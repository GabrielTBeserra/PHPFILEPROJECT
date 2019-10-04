<?php
// inclui os arquivo de criacao de arquivo e diretorio
require_once 'file.php';
require_once 'dir.php';

// recebe todos os campos do formulario
$clientcode = $_POST['clientcode'];
$filename = $_POST['filename'];
$text = $_POST['text'];

// cria variaveis com os caminhos para os diretorios e arquivos
$dir = dirname(__FILE__)."/users/".$clientcode;
$filedir = dirname(__FILE__)."/users/".$clientcode."/".$filename.".txt";

// Caso a pasta de usuarios nao exista, ela esera criada
if(!is_dir(dirname(__FILE__)."/users")){
    mkdir(dirname(__FILE__)."/users/" , 0777);
}

// cria a instancia do diretorio passando o texto, o codigo e o nome do arquivo
$direcory = new Dir($clientcode , $filename , $text);
$direcory->create();
// chama a funcao de criacao
