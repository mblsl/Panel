<?php
include("../../temizlik.php");
if(isset($_POST["gun"]))
{
	if($_POST["token"]==$_COOKIE["token"])
	{		
		$bolunmus = explode("_fc", $_POST["sira"]);	
		include("../../baglanti.php");
		$gun = temizle($_POST["gun"]);
		$dak = temizle($_POST["dak"]%60);
		$sa = temizle(floor($_POST["dak"]/60));
		$sorgu = $vt->query('select * from randevu_takvimi where Durum="0" and Rand_Durum="0" order by Rand_ID asc');	
		$sira = 1;	
		while($rand = mysqli_fetch_assoc($sorgu)) { 
		if($sira==$bolunmus[1])
		{
			$randid = $rand["Rand_ID"];
			$Tarih1 = explode('-', $rand["Tarih"]);$Tarih2 = explode('-', $rand["Tarih2"]);
			$Saat1 = explode(':', $rand["Saat"]);$Saat2 = explode(':', $rand["Saat2"]);
			$tt1 = $Tarih1[0].'-'.$Tarih1[1].'-'.$Tarih1[2].' '.$Saat1[0].':'.$Saat1[1].':'.$Saat1[2];
			$tt2 = $Tarih2[0].'-'.$Tarih2[1].'-'.$Tarih2[2].' '.$Saat2[0].':'.$Saat2[1].':'.$Saat2[2];		
			$ts1 = date("Y-m-d H:i:s",strtotime(($dak)." min ,".($gun)." day ,".($sa)." hour",strtotime($tt1)))/*.'  / '.$gun.' Gün - '.$sa.' Saat - '.$dak.' Dakika'*/;
			$ts2 = date("Y-m-d H:i:s",strtotime(($dak)." min ,".($gun)." day ,".($sa)." hour",strtotime($tt2)));		
			$t1 = substr($ts1, 0, 10);
			$s1 = substr($ts1, 11, 8);
			$t2 = substr($ts2, 0, 10);
			$s2 = substr($ts2, 11, 8);
			
			$update = $vt->query("update randevu_takvimi set Tarih='$t1', Saat='$s1',Tarih2='$t2',Saat2='$s2' where Durum ='0' and Rand_Durum = '0' and Rand_ID='$randid'");	
			if($update)
			{	echo 'Tamam';	}
		}	
		$sira++;
		}mysqli_close($vt);	
	}
}
 ?>