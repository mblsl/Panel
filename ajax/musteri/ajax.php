<?php
if(isset($_POST["lsd"]))
{
	include("../../baglanti.php");	
	$sql = $vt->query("select * from musteriler where Durum='0' order by Mus_ID asc LIMIT ".($_POST["lsd"]-10).",10");
	$count = $sql->num_rows;
	if($count > 0)
	{
		foreach($sql as $row)
		{
			echo $row["Mus_ID"]."-".$row["Adi"]."-".$row["Soyadi"]."-".$row["B_Tarih"]."-".$row["Mail"]."-".$row["Adres"]."-".$row["Tel"]."-".$row["Dosya_No"]."*";						
		}
	}
	mysqli_close($vt);$sira=0;
}
?>