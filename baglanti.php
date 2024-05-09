<?php
     $baglan=mysqli_connect("localhost","root","","kaydol");
     if (!$baglan) {
     die("Bağlantı sağlanamadı SEBEBİ : ".mysqli_connect_error());
     }
     echo "TEBRİKLER VERİTABANINA BAĞLANILDI <p>";
?>