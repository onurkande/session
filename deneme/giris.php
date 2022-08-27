<?php 
session_start();
$kullanici_adi = "Zafer";
$sifre = "123456";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$form_kullanici_adi = $_POST['kullanici_adi'];
	$form_sifre = $_POST['sifre'];


	if ($form_kullanici_adi == $kullanici_adi && $form_sifre == $sifre) {
		$_SESSION['kullanici_adi'] = $form_kullanici_adi;
		$_SESSION['sifre'] = $sifre;
		echo "Başarıyla Giriş yaptınız. <br>";
		echo "Hoşgeldiniz".$_SESSION['kullanici_adi'];


		echo "<a href='cikis.php'>Çıkış Yap</a>";
	}else{
		echo "Kullanıcı adı veya şifreyi yanlış girdiniz. Lütfen Tekrar deneyin. <br>";
		echo "<a href='form.php'>Form Sayfasına git</a>";
	}
}else
{
	header('Location: http://localhost/egitim/form.php');
	exit;
}
 ?>