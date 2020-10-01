<?php
/*
SQL Kodlar� Olu�turma

CREATE TABLE `ip_sayaci` (
  `id` int(11) NOT NULL auto_increment,
  `tarih` date NOT NULL,
  `tiklama` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) 

CREATE TABLE `toplam_sayac` (
  `id` int(11) NOT NULL auto_increment,
  `toplam_tekil` int(11) NOT NULL,
  `toplam_cogul` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
)

CREATE TABLE `online_ziyaretci` (
  `id` int(11) NOT NULL auto_increment,
  `ip` varchar(50) NOT NULL,
  `tarih` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
)


*/


function sayac() {

@mysql_connect("localhost", "root", "1234") or die("Host ile ba�lant� kurulam�yor: " . mysql_error());
@mysql_select_db("deneme");

$gun=0;
//Ka� g�n �ncesinin kay�tlar� silinsin?E�er s�f�rdan farkl� bir de�er girmezseniz hi� bir zaman kay�tlar� silmez

$ip			=$_SERVER['REMOTE_ADDR'];
//Siteye ziyaret edenin IP'sini ��renelim

$zaman		=time();
//�u anki zaman� ��renmemizi sa�lar ve saniye cinsindendir.(Online sayac icin)

$buguntarih = date('Y-m-d');
//Bug�n�n tarihini ��reniyoruz. ��nk� ziyaret edenlerin sitemizi bug�n i�erisinde ka� kere ziyaret etti�ini ��renmek i�in.

$sure_siniri=$zaman-60*5;
//Burada zaman 300 saniye 5 dk lik bir limit koyuyoruz ve 5 dk s�re ile sitede herhangi bir i�lem yapmad�ysa online k�sm�nda d��mek i�in bunu kullanaca��z. Yani Online olay� 5 dk i�indeki aktifli�ine g�re ayarlan�yor.

$kayit_sorgu = mysqli_query("SELECT * FROM ip_sayaci WHERE tarih='$buguntarih' AND ip='$ip'");
//Bug�n siteye gelen ziyaret�i bu IP ile daha �nce giri� yapm�� m� yoksa yapmam��m� diye kontrol etmek istiyoruz.

$kayit_sayisi=mysqli_num_rows($kayit_sorgu);
//Burada daha onceden bugun tarihi ile giri� yap�m�� ise 1 de�erini d�nd�rcektir. Biz de bu sayede tekil say�s�n� saptamada birinci ad�m� atm�� olaca��z.

/*Ba�lang��--Bug�n bu IP ile ilk giri� yap�l�nca bu i�lemler ger�ekle�ecektir.*/
if($kayit_sayisi==0){//S�f�r (0) de�eri geldi ise bug�n daha �nceden bu IP ile giri� yap�lmam�� demektir. Bu y�zden ip_sayaci tablomuza yeni veri giri�i yapmam�z gerekecektir.
	$ip_kaydet=mysql_query("INSERT INTO ip_sayaci (tarih, tiklama, ip) VALUES ('$buguntarih',1,'$ip')");//Veri giri�ini yapt�k.
	$toplam_kayit_sorgu=mysql_query("SELECT * FROM toplam_sayac");//Burada e�er ki saya� yeni olu�turuluyorsa tablo'da hi� kay�t yok demektir. E�er �le ise kay�t var m� yokmu onu ��renece�iz.
	$toplam_kayit_sayisi=mysql_num_rows($toplam_kayit_sorgu);//Kay�r var ise kay�t say�s�n� getirir. Normalde 1 tane kay�ttan sonra ba�ka kay�t girilmez bu tabloya. Yani sayac siteye kurulduktan sonra siteyi ilk ziyaret eden bu tabloya veri giri�ini yapar. Di�er kullan�c�lar ise s�rekli g�ncelleme yapt�r�r.
	if($toplam_kayit_sayisi==0){//S�f�r(0) yani saya� ilk kurumda ise Toplam_sayac tablosuna ilk veri giri�i burada yap�l�r.
		$toplam_sayaci_baslat=mysql_query("INSERT INTO toplam_sayac(toplam_tekil,toplam_cogul) VALUES(1,1)");//Veri giri�i yap�l�yor.
	}
	else{//E�er tablo_sayac' a veri giri�i daha �nceden yap�ld�ysa burada g�ncelleme yap�l�r.
		$toplam_sayaci_artir = mysql_query("UPDATE toplam_sayac SET toplam_tekil=toplam_tekil+1, toplam_cogul=toplam_cogul+1 WHERE id=1 LIMIT 1");//G�ncelleme yap�l�yor.
	}
}
/*Biti�--Bug�n bu IP ile ilk giri� yap�l�nca bu i�lemler ger�ekle�ecektir.*/

/*Ba�lang��--Bug�n daha �nceden bu IP ile giri� yap�m��t�r*/
else{
$ip_sayaci_arttir = mysql_query("UPDATE ip_sayaci SET tiklama=tiklama+1 WHERE tarih='$buguntarih' and ip='$ip'");//SAdece ip_sayaci tablosundaki bug�n tarihli ve IP'ye e�it verinin t�klama say�s�n� artt�r.
$toplam_sayaci_artir1 = mysql_query("UPDATE toplam_sayac SET toplam_cogul=toplam_cogul+1 WHERE id=1 LIMIT 1");//Toplam_sayac tablosunda sadece cogul verisini artt�r.
}
/*Biti�--Bug�n daha �nceden bu IP ile giri� yap�m��t�r*/

//Eski kay�tlar� (ip_sayaci) tablosundan siler.
if ($gun > 0){
	$eski_kayit_sil = mysql_query("DELETE FROM ip_sayaci WHERE tarih <= DATE_SUB('$buguntarih', INTERVAL $gun DAY)");
}

/*Ba�lang��-Online ziyaret�ileri sayd�rmak i�in yap�lan veri giri�, g�ncelleme ve silme*/
//S�re s�n�r� ile ilgi sql c�mleci�i
$sure_miktari= mysql_query("DELETE FROM online_ziyaretci WHERE tarih<'$sure_siniri'");//Burada online olmayanlar� tablodan siliyor.

$ipsorgu=mysql_query("SELECT * FROM online_ziyaretci WHERE ip='$ip'");
//ip'li kullan�c� daha �ncede sitede varm�yd� diye sorgu gonderiyoruz.

$ipline	=mysql_num_rows($ipsorgu);//Varsa 1 de�eri d�necektir.

if($ipline==0)//E�er yok ise siteme kay�t ediyoruz.
{
	$gir="INSERT INTO online_ziyaretci VALUES ('','$ip','$zaman')";
	$girsor=mysql_query($gir);
}
else //Sistemde var ise tekrar girmeye gerek yoktur. Sadece zaman� g�ncellemek yeterlidir.
{
	$guncelle=mysql_query("UPDATE online_ziyaretci SET tarih='$zaman' WHERE ip='$ip'");
}
/*Biti�-Online ziyaret�ileri sayd�rmak i�in yap�lan veri giri�, g�ncelleme ve silme*/


/*Ba�lang��--Sistemdeki Online Ziyaretcilerin Say�s�n� ��renme*/
$kac=mysql_query("SELECT id FROM online_ziyaretci");
//Sorgumuzu yap�yoruz
$online_ziyaretci_sayisi=mysql_num_rows($kac);
//Tabloda ka� sat�r var ise o kadar online ziyaret�i var demektir. Onu ��renmi� olduk.
/*Biti�--Sistemdeki Online Ziyaretcilerin Say�s�n� ��renme*/

/*Ba�lang��--Sistemdeki Toplam Tekil ve �o�ul Ziyaret�ilerin Say�s�n� ��renme*/
$toplam_tc=mysql_query("SELECT * FROM toplam_sayac WHERE id=1 LIMIT 1");
//Sorgumuzu yap�yoruz. 1. sat�rdaki bilgiler bizim verilerimizi i�erir.
$toplam_tc_cek=mysql_fetch_array($toplam_tc);
//Sorgumuz ile verileri diziye att�k.
$toplam_tekil_sayisi=$toplam_tc_cek["toplam_tekil"];
//Tekil say�s�
$toplam_cogul_sayisi=$toplam_tc_cek["toplam_cogul"];
//�o�ul Say�s�
/*Biti�--Sistemdeki Toplam Tekil ve �o�ul Ziyaret�ilerin Say�s�n� ��renme*/

/*Ba�lang��--Sistemdeki Bug�n�n Tekil ve �o�ul Ziyaret�ilerin Say�s�n� ��renme*/
$bugun = mysql_query("SELECT COUNT(ip) AS ttoplam, SUM(tiklama) AS ctoplam FROM ip_sayaci WHERE tarih='$buguntarih'");
//Sorgumuzu yapt�k. Bu sorguyu anlamak i�in biraz mysqli bilginiz olursa daha rahat edersiniz.
//1. Tekil say�s�n� bug�n ka� tane giri� yapan IP varsa onu sayd�rarak ��renebiliriz.
//2. �o�ul say�s�n� bug�n ka� tane tiklama varsa onlar� toplat�rarak ��renebiliriz.
$bugun_veri = mysql_fetch_object($bugun);
//Burada farkl�l�k olmas� a��s�ndan Class'a att�m verilerimizi
$bugun_tekil = $bugun_veri->ttoplam;//Bug�n Toplam Tekil Ziyaretci Say�s�
$bugun_cogul = $bugun_veri->ctoplam;//Bug�n Toplam �o�ul Ziyaret�i SAy�s�
/*Biti�--Sistemdeki Bug�n�n Tekil ve �o�ul Ziyaret�ilerin Say�s�n� ��renme*/

/*Ba�lang��--Sistemdeki D�n Tekil ve �o�ul Ziyaret�ilerin Say�s�n� ��renme*/
$dun = mysql_query("SELECT COUNT(ip) AS dttoplam, SUM(tiklama) AS dctoplam FROM ip_sayaci WHERE tarih = DATE_SUB('$buguntarih', INTERVAL 1 DAY)");
//Sorgumuzu yapt�r�yoruz.SQL c�mleci�indeki tek fark g�n i�lemleri fonksiyonu olan DATE_SUB'u kulland�k ve �nceki tarihteki de�eri ��rendik.
$dun_veri = mysql_fetch_object($dun);//Class'a att�k.
$dun_tekil = $dun_veri->dttoplam;//D�n Toplam Tekil Ziyaretci Say�s�
$dun_cogul = $dun_veri->dctoplam;//D�n Toplam �o�ul Ziyaretci Say�s�
/*Biti�--Sistemdeki D�n Tekil ve �o�ul Ziyaret�ilerin Say�s�n� ��renme*/

?>

<table width="240" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333" bgcolor="#99CCCC" align="center">
  <tr>
    <td colspan="3" bgcolor="#99CCCC"><div align="center"><strong><a href="http://www.phpsorunu.com" target="_blank">Z�YARET�� SAYACI</a></strong></div></td>
  </tr>
  <tr>
    <td width="108" bgcolor="#99FF99">Online</td>
    <td width="4" bgcolor="#99FF99">:</td>
    <td width="141" bgcolor="#99FF99"><?php echo $online_ziyaretci_sayisi; ?></td>
  </tr>
  <tr>
    <td bgcolor="#99CCCC">Bug�n Tekil</td>
    <td bgcolor="#99CCCC">:</td>
    <td bgcolor="#99CCCC"><?php echo $bugun_tekil; ?></td>
  </tr>
  <tr bgcolor="#99FF99">
    <td>Bug�n �o�ul</td>
    <td>:</td>
    <td><?php echo $bugun_cogul; ?></td>
  </tr>
  <tr bgcolor="#99CCCC">
    <td>D�n Tekil</td>
    <td>:</td>
    <td><?php echo $dun_tekil; ?></td>
  </tr>
  <tr bgcolor="#99FF99">
    <td>D�n �o�ul</td>
    <td>:</td>
    <td><?php echo $dun_cogul; ?></td>
  </tr>
  <tr bgcolor="#99CCCC">
    <td>Toplam Tekil</td>
    <td>:</td>
    <td><?php echo $toplam_tekil_sayisi; ?></td>
  </tr>
  <tr bgcolor="#99FF99">
    <td>Toplam �o�ul</td>
    <td>:</td>
    <td><?php echo $toplam_cogul_sayisi; ?></td>
  </tr>
  <tr>
    <td bgcolor="#99CCCC">IP</td>
    <td bgcolor="#99CCCC">:</td>
    <td bgcolor="#99CCCC"><?php echo $ip; ?></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#99FF99"><div align="right"><a href="http://www.phpsorunu.com">phpsorunu</a> </div></td>
  </tr>
</table>


<?php
}
sayac();
//Yazd���m�z fonksiyonumuzu �a��rd�k.
?>