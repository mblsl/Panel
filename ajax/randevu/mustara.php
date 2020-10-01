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
	$mus = $vt->query("select * from musteriler where concat(Adi,Soyadi) like '%".$veri."%' or Mus_ID like '%".$veri."' collate utf8_bin;");	
	while($muscek = mysqli_fetch_assoc($mus))
	{
		echo $muscek["Mus_ID"].") ".$muscek["Adi"]." ".$muscek["Soyadi"].")".$muscek["Dosya_No"]."*";
	}	
}
?>