<?php
include "orang.php";
include "BankCustomer.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>

    <div class="di">
        <?php
        $nasabah = new BankCustomer();
        $nasabah->setcustomerName("Putri Yani Anjali");
        $nasabah->setaddress("jambi");
        $nasabah->setemail("putriyanianjali14@gmail.com");
        $nasabah->setcard("platinum");
        $nasabah->getacc("wadiah");

        $nasabah->insertCard();
        $nasabah->enterPIN(123456);

        ?>
    </div>
</body>
</html>


<!-- localhost/index.php?nama=jeje -->
<!-- http://uinjambi.ac.id/berita?page=1&search=kuliah&orderBy=id -->