 <?php

 class Orang{
    protected $nama;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function ucapSalam(){
        echo "Halo perkenalkan nama saya Putri Yani Anjali" . $this->nama . "<br>";
    }
 }