<?php
if(isset($_POST["lsd"]))
{
	include("../../baglanti.php");	
	if(is_numeric($_POST["lsd"]))
	{
		$sql = $vt->query("select * from mesajkutusu where Durum='0' order by Mesaj_ID asc LIMIT ".($_POST["lsd"]-5).",5");
		$count = $sql->num_rows;
		if($count > 0)
		{
			foreach($sql as $row)
			{
				echo $row["Mesaj_ID"]."-".$row["Ad"]."-".$row["Telefon"]."-".$row["Mail"]."-".$row["Mesaj"]."-".$row["Tarih"]."*";						
			}
		}
		mysqli_close($vt);$sira=0;
	}else
		echo "Bir Hata Oluştu..!";
}
?>