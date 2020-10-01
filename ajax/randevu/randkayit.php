<?php
include("../../temizlik.php");
if(isset($_POST["hizmet_turu"]))
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
		$randdCName = temizle($_POST["randCName"]);	
		$hizmet_tur = temizle($_POST["hizmet_turu"]);
		$sonMID = temizle($_POST["MUDI"]);
		$s1= substr(temizle($_POST["tarih1"]), 16, 8);
		$s2= substr(temizle($_POST["tarih2"]), 16, 8);	
		$t1= isocevir(str_replace(" ", "-", substr(temizle($_POST["tarih1"]), 4, 11)));
		$t2= isocevir(str_replace(" ", "-", substr(temizle($_POST["tarih2"]), 4, 11)));			
		$durum = '0';			
		$sqlr = $vt->query("insert into randevu_takvimi (Muss_ID,Randevu_Notu,Title,Tarih,Saat,Tarih2,Saat2,ClassName,Hizmet_Turu,Durum,Rand_Durum) values ('$sonMID','','$randevutitle','$t1','$s1','$t2','$s2','$randdCName','$hizmet_tur','$durum','$durum')");		
		if($sqlr)
			echo 'Randevu Başarıyla Oluşturuldu.';	
		else
		{echo 'Randevu Ekleme Başarısız Oldu..!';}		
		mysqli_close($vt);	
	}
}
?>