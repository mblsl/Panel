<?php
if(isset($_POST["secx"]))
{
	include("../../baglanti.php");
	if(is_numeric($_POST["secx"]))
	{
		$sql = $vt->query("Update mesajkutusu Set Durum='1' where Mesaj_ID=".$_POST["secx"]);
		if($sql)
		{
			echo "Silme İşlemi Başarıyla Tamamlandı";	
		}
		mysqli_close($vt);
	}
}
?>