<?php
    $price = $_GET["pname"];
    echo "ราคาสินค้าต่อชิ้น : $price <br>";
    $amount = $_GET["aname"];
    echo "จำนวน :  $amount <br>";
    $total = $price*$amount;
    echo "ราคารวม : $total<br>";
    $vat = $total*0.07;
    echo "ภาษีมูลค่าเพิ่ม : $vat<br>";
    $net = $total + $vat;
    echo "ราคาสุทธิ : $net";
?>