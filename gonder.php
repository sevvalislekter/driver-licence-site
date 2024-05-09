<?php
  include('baglanti.php');

  $kullanici_adi = $_POST['kullanici_adi'];
  $kullanici_eposta = $_POST['kullanici_eposta'];
  $kullanici_sifre = $_POST['kullanici_sifre'];

  $baglan = mysqli_connect("localhost", "root", "", "kaydol");
  if (!$baglan) {
    die("Bağlantı sağlanamadı. Hata: " . mysqli_connect_error());
  }
  echo "Bağlantı başarıyla sağlandı<br>";

  mysqli_set_charset($baglan, "utf8");

  $giris = "INSERT INTO uy (kullanici_adi, kullanici_eposta, kullanici_sifre) VALUES ('$kullanici_adi', '$kullanici_eposta', '$kullanici_sifre')";
  $sonuc = mysqli_query($baglan, $giris);

  if (!$sonuc) {
    echo "Kayıt eklenemedi.";
  } else {
    echo "Başarıyla kayıt eklendi.";
  }

?>