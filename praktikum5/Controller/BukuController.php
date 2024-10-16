<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        // mengakses model
        $data = new DaftarBuku();

        // memberi data model dan menampilkan view
        include "View/BukuView.php";

        
    
    }
}