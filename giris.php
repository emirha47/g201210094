<?php

session_start();
ob_start();


if(($_POST["user"]=="g201210094@ogr.sakarya.edu.tr") && ($_POST["pass"]=="1111"))
{

$_SESSION["login"] = "true";
$_SESSION["user"] = "g201210094@ogr.sakarya.edu.tr";
$_SESSION["pass"] = "1111";

echo "Hosgeldiniz g201210094. Giriş basarili. Anasayfaya yonlendiriliyorsunuz. Lütfen bekleyin..";
header("Refresh:2; url=index.html");

}
elseif(($_POST["user"]==null) && ($_POST["pass"]==null))
{
echo "Kullanici adi veya sifre bos birakilamaz. ";
header("Refresh: 2; url=Giris.html");
}
else
{
echo "Kullanici adi veya sifre yanlis. Lütfen kontrol ediniz .";
header("Refresh: 2; url=Giris.html");
}


ob_end_flush();
?>