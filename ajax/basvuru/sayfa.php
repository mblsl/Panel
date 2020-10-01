<?php
if(isset($_POST["lsd"]))
{
	include("../../baglanti.php");	
	$sql = $vt->query("select * from basvurular where Durum='0' order by Bas_ID asc LIMIT ".($_POST["lsd"]-5).",5");
	$count = $sql->num_rows;
	if($count > 0)
	{
		foreach($sql as $row)
		{
			echo $row["Bas_ID"]."-".$row["Ad"]."-".$row["Mail"]."-".$row["Tel"]."-".$row["Tarih"]."*";						
		}
	}
	mysqli_close($vt);$sira=0;
	
}
?>