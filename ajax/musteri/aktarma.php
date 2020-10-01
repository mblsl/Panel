<?php
if(isset($_POST["secx"]))
{
	include("../../baglanti.php");	
	$sql = $vt->query("select * from musteriler where Durum='0' and Mus_ID=".$_POST["secx"]);
	$count = $sql->num_rows;
	if($count > 0)
	{
		foreach($sql as $row)
		{
			echo $row["Mus_ID"]."-".$row["Adi"]."-".$row["Soyadi"]."-".$row["B_Tarih"]."-".$row["Mail"]."-".$row["Adres"]."-".$row["Tel"]."-".$row["Dosya_No"]."-".$row["M_Cins"];					
		}
	}
	mysqli_close($vt);
}
?>