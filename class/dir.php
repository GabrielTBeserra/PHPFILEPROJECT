<?php
class Dir {
    private $dir;
    private $text;
    private $filename;

    // Classe responsavel por criar a pasta com o codigo
    public function __construct($directory, $filename, $text)
    {
        $this->dir = dirname(__FILE__) . "./users/" . $directory;
        $this->filename = dirname(__FILE__) . "/users/" . $directory . "/" . $filename . ".txt";
        $this->text = $text;
    }


    // aposta o construtor ser chamado , a funcao create executa todo processo de criacao
    public function create()
    {
        $newfile = new File($this->filename, $this->text);

        // verifica se existe o ja alguma pasta com o codigo , caso tenha ele so cria o arquivo la dentro
        // caso ao contrario ele cria a pasta e coloca o arquivo la dentro
        if (is_dir($this->dir)) {
            $newfile->create();
        } else {
            if (mkdir($this->dir, 0777)) {
                $newfile->create();
            } else {
                $newfile->create();
            }
        }
    }
}
