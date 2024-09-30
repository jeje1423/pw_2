<?php

// visibility.php

class visibility{

    public $public = 'Public' ;
    private $private = 'Private' ;
    protected $protected = 'Protected' ;

    function tampilkanData (){
        echo "Akses didalam Kelas <br>";
        echo "Public" . $this->public . "<br>";
        echo "Private" . $this->private . "<br>";
        echo "protected" . $this->protected . "<br>";

        }



}