<?php
class Dir {
    private $dir;
    private $text;
    private $filename;

    public function __construct($directory, $filename, $text)
    {
        $this->dir = dirname(__FILE__) . "./users/" . $directory;
        $this->filename = dirname(__FILE__) . "/users/" . $directory . "/" . $filename . ".txt";
        $this->text = $text;
    }

    public function create()
    {
        $newfile = new File($this->filename, $this->text);

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
