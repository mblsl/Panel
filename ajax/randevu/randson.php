<?php
include("../../temizlik.php");
if(isset($_POST["randnot"]))
{
	if($_POST["token"]==$_COOKIE["token"])
	{			
		include("../../baglanti.php");
		$durum = '0';
		$bolunmus = temizle(explode("_fc", $_POST["sira"]));	
		$randnot = temizle($_POST["randnot"]);
		$randtarih = temizle($_POST["randtarih"]);
		$randsaat1 = temizle($_POST["randsaat1"]);
		$randsaat2 = temizle($_POST["randsaat2"]);
		$rs1 = $randsaat1.':00';
		$rs2 = $randsaat2.':00';
		$miktar = temizle($_POST["rmiktar"]);
		$odemetur = temizle($_POST["odemetur"]);
		$sorgu = $vt->query('select * from randevu_takvimi where Durum="0" and Rand_Durum="0" order by Rand_ID asc');	
		$sira = 1;	
		while($rand = mysqli_fetch_assoc($sorgu)) { 
			if($sira==$bolunmus[1])
			{
				$randid = $rand["Rand_ID"];
				$musid = $rand["Muss_ID"];
				$randad = $rand["Title"];
				$hizmettur = $rand["Hizmet_Turu"];
				$classN = $rand["ClassName"];
				if($randnot!="" && $miktar!="")
				{
					if($randtarih!="")
					{
						if($randsaat1=="" || $randsaat2=="" || $randsaat1 == '00:00' || $randsaat2=='00:00')
						{						
							$upins = 0;
							$update = $vt->query("update randevu_takvimi set Rand_Durum='1' ,Randevu_Notu='$randnot' where Durum ='0' and Rand_Durum = '0' and Rand_ID='$randid'");	
							if($update)
							   $upins++;
							$odins1 = $vt->query("insert into odemeler (Rand_ID,Odeme_Turu,Miktar,Durum) values ('$randid','$odemetur','$miktar','$durum')");
							if($odins1)
								$upins++;
							if($upins==2)
								echo 'Randevu Sonlandırıldı ve Ödeme Eklenildi';
						}
						else
						{						
							$upins2 = 0;
							$update2 = $vt->query("update randevu_takvimi set Rand_Durum='1' ,Randevu_Notu='$randnot' where Durum ='0' and Rand_Durum = '0' and Rand_ID='$randid'");	
							if($update2)
								$upins2++;
							$randins = $vt->query("insert into randevu_takvimi (Muss_ID,Randevu_Notu,Title,Tarih,Saat,Tarih2,Saat2,ClassName,Hizmet_Turu,Durum,Rand_Durum) values ('$musid','','$randad','$randtarih','$rs1','$randtarih','$rs2','$classN','$hizmettur','$durum','$durum')");
							if($randins)
								$upins2++;	
							$odins2 = $vt->query("insert into odemeler (Rand_ID,Odeme_Turu,Miktar,Durum) values ('$randid','$odemetur','$miktar','$durum')");
							if($odins2)
								$upins2++;
							if($upins2==3)
								echo 'Randevu Sonlandırıldı - Yeni Randevu Verildi ve Ödeme Eklenildi';						
						}
					}
					else
					{					
						$upins3 = 0;
						$update = $vt->query("update randevu_takvimi set Rand_Durum='1' ,Randevu_Notu='$randnot' where Durum ='0' and Rand_Durum = '0' and Rand_ID='$randid'");	
						if($update)
							$upins3++;
						$odins3 = $vt->query("insert into odemeler (Rand_ID,Odeme_Turu,Miktar,Durum) values ('$randid','$odemetur','$miktar','$durum')");
						if($odins3)
							$upins3++;
						if($upins3 == 2)
							echo 'Randevu Sonlandırıldı ve Ödeme Eklenildi';
					}
				}
				else
					echo 'Randevu Notunu yada Miktarı Boş Bıraktınız';
			}
		$sira++;
		}mysqli_close($vt);			
	}else
		echo 'Saldırı Var';
}
 ?>