<?php
$satirlar=file($dosya='../../../../assets/js/pages/json/events.json'); 
for($s=0; $s<=count($satirlar); $s++)
{unset($satirlar[$s]); }
	if(file_exists("../../../../assets/js/pages/json/events.json"))	
	{unlink ("../../../../assets/js/pages/json/events.json");}
	if(!file_exists("../../../../assets/js/pages/json/events.json"))
	{touch ("../../../../assets/js/pages/json/events.json");}	
	function ReadtextFile($FileName)
	{
	  if (file_exists($FileName) )
		{
		$file_size = filesize($FileName);
		if ($file_size == 0) return "";
		}
	  else return "-1";
	  if (!$fp = fopen($FileName, "r")) return "-1";
	  $s01 = fread($fp, filesize($FileName));
	  fclose($fp);
	  return $s01;
	}
	if(ReadtextFile("../../../../assets/js/pages/json/events.json")=="")
	{
		include("../../../../baglanti.php");
		$sayi = 0;
		$icerik = "";	
		$sc = $vt->query('select * from randevu_takvimi where Durum="0" and Rand_Durum="0" order by Rand_ID asc');
		
		while($rc = mysqli_fetch_assoc($sc)) 
		{
			$sayi++;
			$title = $rc["Title"];
			$start = $rc["Tarih"]." ".$rc["Saat"]."+03:00";
			$end = $rc["Tarih2"]." ".$rc["Saat2"]."+03:00";
			$clName = $rc["ClassName"];
			if($sayi==1)
			{
		$icerik .='[{	
	"title": "'.$title.'",
	"start": "'.$start.'",
	"end": "'.$end.'",
	"className": "'.$clName.'"
}';				
			}else if($sayi <= ($sc->num_rows-1))
			{
				$icerik .=',
{
	"title": "'.$title.'",
	"start": "'.$start.'",
	"end": "'.$end.'",
	"className": "'.$clName.'"
}';
			}
			else
			{
				$icerik .=',
{
	"title": "'.$title.'",
	"start": "'.$start.'",
	"end": "'.$end.'",
	"className": "'.$clName.'"
}]';
			}
			$file = fopen('assets/js/pages/json/events.json',"w");			
			fwrite( $file, $icerik);
			fclose( $file );			
		}	
	}	
?>