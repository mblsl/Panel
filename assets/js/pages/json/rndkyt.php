<?php
if(isset($_POST["rndsttc"]))
{
	include("../../../../temizlik.php");
	function isocevir($deger)
	{			
		$deger= str_replace("Jan", "01", $deger);
		$deger= str_replace("Feb", "02", $deger);
		$deger= str_replace("Mar", "03", $deger);
		$deger= str_replace("Apr", "04", $deger);
		$deger= str_replace("May", "05", $deger);
		$deger= str_replace("Jun", "06", $deger);
		$deger= str_replace("Jul", "07", $deger);
		$deger= str_replace("Aug", "08", $deger);
		$deger= str_replace("Sep", "09", $deger);
		$deger= str_replace("Oct", "10", $deger);
		$deger= str_replace("Nov", "11", $deger);
		$deger= str_replace("Dec", "12", $deger);		
		$ay = substr($deger ,0, 2);
		$gun = substr($deger ,3, 2);
		$yil = substr($deger ,6, 4);		
		$deger = $yil.'-'.$ay.'-'.$gun;		
		return $deger;
	}
		$randevutitle = temizle($_POST["randtitle"]);
		$randdCName = temizle($_POST["randCName"]);
		$s1= substr(temizle($_POST["tarih1"]), 16, 8);
		$s2= substr(temizle($_POST["tarih2"]), 16, 8);	
		$t1= isocevir(str_replace(" ", "-", substr(temizle($_POST["tarih1"]), 4, 11)));
		$t2= isocevir(str_replace(" ", "-", substr(temizle($_POST["tarih2"]), 4, 11)));	
		$tr = "+03:00";
		//$id = "4";
		$title = $randevutitle;
		$start = $t1." ".$s1.$tr;
		$end = $t2." ".$s2.$tr;
		$clName = $randdCName;
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
	if(ReadtextFile("events.json")=="")
	{		
			$icerik ='[{	
	"title": "'.$title.'",
	"start": "'.$start.'",
	"end": "'.$end.'",
	"className": "'.$clName.'"
}]';
			$file = fopen('events.json',"w");			
			fwrite( $file, $icerik);
			fclose( $file );			
	}	  
	else
	{
		//Son Karekter Köşeli Parentez Silinir 
		$icerik = substr_replace(ReadtextFile("events.json"), '', -1);
		// Ekleme
		$icerik = $icerik.',';		

		$icerik = $icerik.'
{	
	"title": "'.$title.'",
	"start": "'.$start.'",
	"end": "'.$end.'",
	"className": "'.$clName.'"
}]';

		$file = fopen('events.json',"w");		
		fwrite( $file, $icerik);
		fclose( $file );				
	}
}
?>