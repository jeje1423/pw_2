<?php
    include "orang.php";

    class mahasiswa extends orang{
        public $nim;
        public $prodi;

        public function getNilaiSemester(){

        }

    }

    class mahasiswaAsing extends mahasiswa{
        
        //override
        public function ucapSalam(){
            echo "Hello my name" . $this->nama . "<br>";
        }

    }