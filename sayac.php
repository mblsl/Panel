<?php
/*
SQL Kodlarý Oluþturma

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

@mysql_connect("localhost", "root", "1234") or die("Host ile baðlantý kurulamýyor: " . mysql_error());
@mysql_select_db("deneme");

$gun=0;
//Kaç gün öncesinin kayýtlarý silinsin?Eðer sýfýrdan farklý bir deðer girmezseniz hiç bir zaman kayýtlarý silmez

$ip			=$_SERVER['REMOTE_ADDR'];
//Siteye ziyaret edenin IP'sini öðrenelim

$zaman		=time();
//Þu anki zamaný öðrenmemizi saðlar ve saniye cinsindendir.(Online sayac icin)

$buguntarih = date('Y-m-d');
//Bugünün tarihini öðreniyoruz. Çünkü ziyaret edenlerin sitemizi bugün içerisinde kaç kere ziyaret ettiðini öðrenmek için.

$sure_siniri=$zaman-60*5;
//Burada zaman 300 saniye 5 dk lik bir limit koyuyoruz ve 5 dk süre ile sitede herhangi bir iþlem yapmadýysa online kýsmýnda düþmek için bunu kullanacaðýz. Yani Online olayý 5 dk içindeki aktifliðine göre ayarlanýyor.

$kayit_sorgu = mysqli_query("SELECT * FROM ip_sayaci WHERE tarih='$buguntarih' AND ip='$ip'");
//Bugün siteye gelen ziyaretçi bu IP ile daha önce giriþ yapmýþ mý yoksa yapmamýþmý diye kontrol etmek istiyoruz.

$kayit_sayisi=mysqli_num_rows($kayit_sorgu);
//Burada daha onceden bugun tarihi ile giriþ yapýmýþ ise 1 deðerini döndürcektir. Biz de bu sayede tekil sayýsýný saptamada birinci adýmý atmýþ olacaðýz.

/*Baþlangýç--Bugün bu IP ile ilk giriþ yapýlýnca bu iþlemler gerçekleþecektir.*/
if($kayit_sayisi==0){//Sýfýr (0) deðeri geldi ise bugün daha önceden bu IP ile giriþ yapýlmamýþ demektir. Bu yüzden ip_sayaci tablomuza yeni veri giriþi yapmamýz gerekecektir.
	$ip_kaydet=mysql_query("INSERT INTO ip_sayaci (tarih, tiklama, ip) VALUES ('$buguntarih',1,'$ip')");//Veri giriþini yaptýk.
	$toplam_kayit_sorgu=mysql_query("SELECT * FROM toplam_sayac");//Burada eðer ki sayaç yeni oluþturuluyorsa tablo'da hiç kayýt yok demektir. Eðer öle ise kayýt var mý yokmu onu öðreneceðiz.
	$toplam_kayit_sayisi=mysql_num_rows($toplam_kayit_sorgu);//Kayýr var ise kayýt sayýsýný getirir. Normalde 1 tane kayýttan sonra baþka kayýt girilmez bu tabloya. Yani sayac siteye kurulduktan sonra siteyi ilk ziyaret eden bu tabloya veri giriþini yapar. Diðer kullanýcýlar ise sürekli güncelleme yaptýrýr.
	if($toplam_kayit_sayisi==0){//Sýfýr(0) yani sayaç ilk kurumda ise Toplam_sayac tablosuna ilk veri giriþi burada yapýlýr.
		$toplam_sayaci_baslat=mysql_query("INSERT INTO toplam_sayac(toplam_tekil,toplam_cogul) VALUES(1,1)");//Veri giriþi yapýlýyor.
	}
	else{//Eðer tablo_sayac' a veri giriþi daha önceden yapýldýysa burada güncelleme yapýlýr.
		$toplam_sayaci_artir = mysql_query("UPDATE toplam_sayac SET toplam_tekil=toplam_tekil+1, toplam_cogul=toplam_cogul+1 WHERE id=1 LIMIT 1");//Güncelleme yapýlýyor.
	}
}
/*Bitiþ--Bugün bu IP ile ilk giriþ yapýlýnca bu iþlemler gerçekleþecektir.*/

/*Baþlangýç--Bugün daha önceden bu IP ile giriþ yapýmýþtýr*/
else{
$ip_sayaci_arttir = mysql_query("UPDATE ip_sayaci SET tiklama=tiklama+1 WHERE tarih='$buguntarih' and ip='$ip'");//SAdece ip_sayaci tablosundaki bugün tarihli ve IP'ye eþit verinin týklama sayýsýný arttýr.
$toplam_sayaci_artir1 = mysql_query("UPDATE toplam_sayac SET toplam_cogul=toplam_cogul+1 WHERE id=1 LIMIT 1");//Toplam_sayac tablosunda sadece cogul verisini arttýr.
}
/*Bitiþ--Bugün daha önceden bu IP ile giriþ yapýmýþtýr*/

//Eski kayýtlarý (ip_sayaci) tablosundan siler.
if ($gun > 0){
	$eski_kayit_sil = mysql_query("DELETE FROM ip_sayaci WHERE tarih <= DATE_SUB('$buguntarih', INTERVAL $gun DAY)");
}

/*Baþlangýç-Online ziyaretçileri saydýrmak için yapýlan veri giriþ, güncelleme ve silme*/
//Süre sýnýrý ile ilgi sql cümleciði
$sure_miktari= mysql_query("DELETE FROM online_ziyaretci WHERE tarih<'$sure_siniri'");//Burada online olmayanlarý tablodan siliyor.

$ipsorgu=mysql_query("SELECT * FROM online_ziyaretci WHERE ip='$ip'");
//ip'li kullanýcý daha öncede sitede varmýydý diye sorgu gonderiyoruz.

$ipline	=mysql_num_rows($ipsorgu);//Varsa 1 deðeri dönecektir.

if($ipline==0)//Eðer yok ise siteme kayýt ediyoruz.
{
	$gir="INSERT INTO online_ziyaretci VALUES ('','$ip','$zaman')";
	$girsor=mysql_query($gir);
}
else //Sistemde var ise tekrar girmeye gerek yoktur. Sadece zamaný güncellemek yeterlidir.
{
	$guncelle=mysql_query("UPDATE online_ziyaretci SET tarih='$zaman' WHERE ip='$ip'");
}
/*Bitiþ-Online ziyaretçileri saydýrmak için yapýlan veri giriþ, güncelleme ve silme*/


/*Baþlangýç--Sistemdeki Online Ziyaretcilerin Sayýsýný Öðrenme*/
$kac=mysql_query("SELECT id FROM online_ziyaretci");
//Sorgumuzu yapýyoruz
$online_ziyaretci_sayisi=mysql_num_rows($kac);
//Tabloda kaç satýr var ise o kadar online ziyaretçi var demektir. Onu öðrenmiþ olduk.
/*Bitiþ--Sistemdeki Online Ziyaretcilerin Sayýsýný Öðrenme*/

/*Baþlangýç--Sistemdeki Toplam Tekil ve Çoðul Ziyaretçilerin Sayýsýný Öðrenme*/
$toplam_tc=mysql_query("SELECT * FROM toplam_sayac WHERE id=1 LIMIT 1");
//Sorgumuzu yapýyoruz. 1. satýrdaki bilgiler bizim verilerimizi içerir.
$toplam_tc_cek=mysql_fetch_array($toplam_tc);
//Sorgumuz ile verileri diziye attýk.
$toplam_tekil_sayisi=$toplam_tc_cek["toplam_tekil"];
//Tekil sayýsý
$toplam_cogul_sayisi=$toplam_tc_cek["toplam_cogul"];
//Çoðul Sayýsý
/*Bitiþ--Sistemdeki Toplam Tekil ve Çoðul Ziyaretçilerin Sayýsýný Öðrenme*/

/*Baþlangýç--Sistemdeki Bugünün Tekil ve Çoðul Ziyaretçilerin Sayýsýný Öðrenme*/
$bugun = mysql_query("SELECT COUNT(ip) AS ttoplam, SUM(tiklama) AS ctoplam FROM ip_sayaci WHERE tarih='$buguntarih'");
//Sorgumuzu yaptýk. Bu sorguyu anlamak için biraz mysqli bilginiz olursa daha rahat edersiniz.
//1. Tekil sayýsýný bugün kaç tane giriþ yapan IP varsa onu saydýrarak öðrenebiliriz.
//2. Çoðul sayýsýný bugün kaç tane tiklama varsa onlarý toplatýrarak öðrenebiliriz.
$bugun_veri = mysql_fetch_object($bugun);
//Burada farklýlýk olmasý açýsýndan Class'a attým verilerimizi
$bugun_tekil = $bugun_veri->ttoplam;//Bugün Toplam Tekil Ziyaretci Sayýsý
$bugun_cogul = $bugun_veri->ctoplam;//Bugün Toplam Çoðul Ziyaretçi SAyýsý
/*Bitiþ--Sistemdeki Bugünün Tekil ve Çoðul Ziyaretçilerin Sayýsýný Öðrenme*/

/*Baþlangýç--Sistemdeki Dün Tekil ve Çoðul Ziyaretçilerin Sayýsýný Öðrenme*/
$dun = mysql_query("SELECT COUNT(ip) AS dttoplam, SUM(tiklama) AS dctoplam FROM ip_sayaci WHERE tarih = DATE_SUB('$buguntarih', INTERVAL 1 DAY)");
//Sorgumuzu yaptýrýyoruz.SQL cümleciðindeki tek fark gün iþlemleri fonksiyonu olan DATE_SUB'u kullandýk ve önceki tarihteki deðeri öðrendik.
$dun_veri = mysql_fetch_object($dun);//Class'a attýk.
$dun_tekil = $dun_veri->dttoplam;//Dün Toplam Tekil Ziyaretci Sayýsý
$dun_cogul = $dun_veri->dctoplam;//Dün Toplam Çoðul Ziyaretci Sayýsý
/*Bitiþ--Sistemdeki Dün Tekil ve Çoðul Ziyaretçilerin Sayýsýný Öðrenme*/

?>

<table width="240" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333" bgcolor="#99CCCC" align="center">
  <tr>
    <td colspan="3" bgcolor="#99CCCC"><div align="center"><strong><a href="http://www.phpsorunu.com" target="_blank">ZÝYARETÇÝ SAYACI</a></strong></div></td>
  </tr>
  <tr>
    <td width="108" bgcolor="#99FF99">Online</td>
    <td width="4" bgcolor="#99FF99">:</td>
    <td width="141" bgcolor="#99FF99"><?php echo $online_ziyaretci_sayisi; ?></td>
  </tr>
  <tr>
    <td bgcolor="#99CCCC">Bugün Tekil</td>
    <td bgcolor="#99CCCC">:</td>
    <td bgcolor="#99CCCC"><?php echo $bugun_tekil; ?></td>
  </tr>
  <tr bgcolor="#99FF99">
    <td>Bugün Çoðul</td>
    <td>:</td>
    <td><?php echo $bugun_cogul; ?></td>
  </tr>
  <tr bgcolor="#99CCCC">
    <td>Dün Tekil</td>
    <td>:</td>
    <td><?php echo $dun_tekil; ?></td>
  </tr>
  <tr bgcolor="#99FF99">
    <td>Dün Çoðul</td>
    <td>:</td>
    <td><?php echo $dun_cogul; ?></td>
  </tr>
  <tr bgcolor="#99CCCC">
    <td>Toplam Tekil</td>
    <td>:</td>
    <td><?php echo $toplam_tekil_sayisi; ?></td>
  </tr>
  <tr bgcolor="#99FF99">
    <td>Toplam Çoðul</td>
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
//Yazdýðýmýz fonksiyonumuzu çaðýrdýk.
?>