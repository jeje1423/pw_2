<?php

require_once "Orang.php";

class OrangInggris extends Orang{

    //override
    public function ucapSalam()
    {
        echo "Hello my name is Putri Yani Anjalics" . $this->nama . "<br>";
    }

}