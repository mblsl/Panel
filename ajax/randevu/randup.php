<?php
include("../../temizlik.php");
if(isset($_POST["dosyano"]))
{	
	function isocevir($deger)
	{			
		$deger= str_replace("Jan", "01", $deger);
		$deger= str_replace("Feb", "02", $deger);
		$deger= str_replace("Mar", "03", $deger);
		$deger= str_replace("Apr", "04", $deger);
		$deger= str_replace("May", "05", $deger);
		$deger= str_replace("Jun", "06", $deger);
		$deger= str_replace("Jul", "07", $deger);
		$deger= str_replace("Aug", "08", $deger);
		$deger= str_replace("Sep", "09", $deger);
		$deger= str_replace("Oct", "10", $deger);
		$deger= str_replace("Nov", "11", $deger);
		$deger= str_replace("Dec", "12", $deger);		
		$ay = substr($deger ,0, 2);
		$gun = substr($deger ,3, 2);
		$yil = substr($deger ,6, 4);		
		$deger = $yil.'-'.$ay.'-'.$gun;		
		return $deger;
	}
	
	if($_POST["token"]==$_COOKIE["token"])
	{	
		include("../../baglanti.php");
		$randevutitle = temizle($_POST["randtitle"]);
		$dosno = temizle($_POST["dosyano"]);
		$s1= substr(temizle($_POST["tarih1"]), 16, 8);
		$s2= substr(temizle($_POST["tarih2"]), 16, 8);	
		$t1= isocevir(str_replace(" ", "-", substr(temizle($_POST["tarih1"]), 4, 11)));
		$t2= isocevir(str_replace(" ", "-", substr(temizle($_POST["tarih2"]), 4, 11)));			
		$durum = '0';			
		$sqlr = $vt->query("update randevu_takvimi set Tarih = '$t1', Saat = '$s1', Tarih2 = '$t2', Saat2 = '$s2'  where Title='$randevutitle'");		
		if($sqlr)
			echo 'Randevu Başarıyla Güncellendi.';	
		else
		{echo 'Randevu Güncelleme Başarısız Oldu..!';}		
		mysqli_close($vt);	
	}
}
?>