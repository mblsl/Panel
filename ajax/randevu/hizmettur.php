<?php
function bosluk_sil($veri)
{
$veri = str_replace("/s+/","",$veri);
$veri = str_replace(" ","",$veri);
$veri = str_replace(" ","",$veri);
$veri = str_replace("/s/g","",$veri);
$veri = str_replace("/s+/g","",$veri);		
$veri = trim($veri);
return $veri; 
};	
if(isset($_POST["like"]))
{	
	include("../../baglanti.php");
	include("../../temizlik.php");
	$veri = bosluk_sil(temizle($_POST["like"]));	
	$hiz = $vt->query("select * from hizmetler where H_Adi like '%".$veri."%' and Durum='0' or HK_Adi like '%".$veri."%' and Durum='0' or H_ID like '%".$veri."' and Durum='0' collate utf8_bin;");	
	while($hizcek = mysqli_fetch_assoc($hiz))
	{
		echo $hizcek["H_ID"].") ".$hizcek["H_Adi"]." - ".$hizcek["HK_Adi"]."*";
	}	
}
?>