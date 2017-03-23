<?php

namespace discos;

class disco
{
    public $artist;
    public $album;

    public function __construct($album,$artist=null)
    {
        $this->album = $album;
        $this->artista = $artist;
    }

    public function getDisco()
    {
        if($this->artist == null){
            echo "artista desconocido";
            echo "<br>";
            echo "album " .$this->album;
        }else{
            echo "artista " .$this->artist;
            echo "<br>";
            echo "album " .$this->album;
        }
    }
}