<?php
    session_start();

    $kullanici_adi= "onur";
    $sifre= "12345";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $form_kullanici_adi=$_POST['name'];
        $form_sifre=$_POST['sifre'];

        if($form_kullanici_adi == $kullanici_adi && $form_sifre == $sifre)
        {
            $_SESSION['kullanici_adi'] == $form_kullanici_adi;
            $_SESSION['sifre'] == $form_sifre;
            echo "Başarıyla giriş yapıldı <br>";
            echo "hoşgeldiniz" . $_SESSION['kullanici_adi'];

            echo "<a href='cikis.php'>çıkış</a>";
        }
        else
        {
            echo "Kullanıcı adı veya şifreyi yanlış girdiniz. Lütfen Tekrar deneyin. <br>";
            echo "<a href='index.php'>Form Sayfasına git</a>";
        }

    }

    else
    {
        header("Location:./index.php");
        exit;
    }

?>