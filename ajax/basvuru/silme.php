<?php
if(isset($_POST["secx"]))
{
	include("../../baglanti.php");
	$sql = $vt->query("Update basvurular Set Durum='1' where Bas_ID=".$_POST["secx"]);
	if($sql)
	{
		echo "Silme İşlemi Başarıyla Tamamlandı";	
	}
	mysqli_close($vt);}
?>