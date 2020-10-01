<?php
session_start();
include("../../assets/libs/sifreleme.php");
include("../../temizlik.php");
if($_POST["kulad"])
{	
	if($_POST["token"]==$_COOKIE["token"])
	{				
		include("../../baglanti.php");					
		$kullanici = temizle($_POST['kulad']);
		$sifre = temizle($_POST['sifre']);
							
		$sorgu = $vt->query('select * from kullanicilar where Durum="0"');						
		while($sonuc = mysqli_fetch_assoc($sorgu)) 
		{
			if($sonuc["Ban"]=='0')
			{
				if($sonuc['kulad'] == $kullanici && $sonuc['sifre'] == encrypter($sifre) && $sonuc["Yetki"]=="ADMIN")
				{
					echo 'login=true';
					$_SESSION["login"] = "true";	
					$_SESSION["kullanici"] = $sonuc['kulad'];																
				}
				else						
					echo 'Bu Alana Giriş Yetkiniz Bulunmamaktadır..!';	
			}
			else{echo 'Hesabınız Engellendi..!'; }							
		}
	}else
		echo 'Saldırı Koruması Aktif..!';
}
?>