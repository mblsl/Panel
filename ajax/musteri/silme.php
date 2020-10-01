<?php
if(isset($_POST["secx"]))
{
	include("../../baglanti.php");
	include("../../temizlik.php");
	if(is_numeric(temizle($_POST["secx"])))
	{
		$sql = $vt->query("Update musteriler Set Durum='1' where Mus_ID=".temizle($_POST["secx"]));
		if($sql)
		{
			echo "Silme İşlemi Başarıyla Tamamlandı";	
		}
		mysqli_close($vt);}
	}else
		echo "Bir Hata Oluştu...";
?>