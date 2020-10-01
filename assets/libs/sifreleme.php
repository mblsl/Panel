<?php
function encrypter($deger)
{
	$sayi = 1;	
	$sifreli = "";
	for($x=strlen($deger); $x>0; $x--)
	{
		if(($x+1)%2==0)
			$sifreli .= sha1(md5('M'.crc32('H'.sha1(md5('Mana'.substr($deger,$x,1).'Yazılım'))))).'1';
		else
			$sifreli .= sha1(md5('M'.crc32('H'.sha1(md5('Mana'.substr($deger,$x,1).'Yazılım'))))).'0';
	}	
	return md5($sifreli);	
}
?>