<?php
if(isset($_POST["secx"]))
{
	include("../../baglanti.php");	
	$sql = $vt->query("select * from hizmetler where Durum='0' and H_ID=".$_POST["secx"]);
	$count = $sql->num_rows;
	if($count > 0)
	{
		foreach($sql as $row)
		{
			echo $row["H_ID"]."-".$row["H_Adi"]."-".$row["HK_Adi"]."-".$row["H_Tutar"]."-".$row["H_Cins"];					
		}
	}
	mysqli_close($vt);
}
?>