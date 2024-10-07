<?php

class Form{
    protected $fields;

    public function __construct()
    {
        $this->field = [];
    }

    public function setTextField($nama, $text){
        $label = "<div class='weapper'><label for='".$nama."'>".$nama."</label>";
        $texyfield = "<input class='form input' type='text' name='".$nama."'></div>";
        array_push($this->$fields, $kabel . $texxtfield);
    }

    public function tampilkanData(){
        echo "<form >";
            foreach ($fields as $field){
                echo $field;
            }
        echo "<input type='submit' value='simpam'>";
        echo "</form>";
    }
}

class FormMahasiswa {

}