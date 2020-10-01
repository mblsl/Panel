<?php
function temizle($veri)
{
	$veri = str_replace('"', "", $veri);
	$veri = str_replace('&ldquo;', "", $veri);
	$veri = str_replace('&rdquo;', "", $veri);
	
	$veri = str_replace("'", "", $veri);
	$veri = str_replace("&#46;", "", $veri);
	
	$veri = str_replace(';', "", $veri);	
	$veri = str_replace('&#59;', "", $veri);
	
	$veri = str_replace('(', "", $veri);
	$veri = str_replace('&#40;', "", $veri);
	
	$veri = str_replace(')', "", $veri);
	$veri = str_replace('&#41;', "", $veri);	
	
	$veri = str_replace('[', "", $veri);
	$veri = str_replace('&#91;', "", $veri);
	
	$veri = str_replace(']', "", $veri);
	$veri = str_replace('&#93;', "", $veri);	
	
	$veri = str_replace('{', "", $veri);
	$veri = str_replace('&#123;', "", $veri);
	
	$veri = str_replace('}', "", $veri);
	$veri = str_replace('&#125;', "", $veri);
	
	$veri = str_replace('alert', "", $veri);
	$veri = str_replace('&#97;&#108;&#101;&#114;&#116;', "", $veri);		
	
	$veri = str_replace('<script>', "", $veri);
	$veri = str_replace('&#60;&#115;&#99;&#114;&#105;&#112;&#116;&#62;', "", $veri);
	
	$veri = str_replace('</script>', "", $veri);
	$veri = str_replace('&#60;&#47;&#115;&#99;&#114;&#105;&#112;&#116;&#62;', "", $veri);		
	
	return $veri;	
}
?>