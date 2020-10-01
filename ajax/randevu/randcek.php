<?php
	include("../../baglanti.php");	
	$sql = $vt->query("select * from randevu_takvimi where Durum='0' and Rand_Durum='0' order by Rand_ID asc");	
	while($rand = mysqli_fetch_assoc($sql))
	{
		echo $rand["Rand_ID"].".".$rand["Title"].".".$rand["Tarih"].".".$rand["Saat"].".".$rand["ClassName"]."*";
	}	
	mysqli_close($vt);
?>