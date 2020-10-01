<?php
if(isset($_POST["lsd"]))
{
	include("../../baglanti.php");	
	$sql = $vt->query("select * from hizmetler where Durum='0' order by H_ID asc LIMIT ".($_POST["lsd"]-10).",10");
	$count = $sql->num_rows;
	if($count > 0)
	{
		foreach($sql as $row)
		{
			echo $row["H_ID"]."-".$row["H_Adi"]."-".$row["HK_Adi"]."-".$row["H_Tutar"]."-".$row["H_Cins"]."*";						
		}
	}
	mysqli_close($vt);$sira=0;
}
?>