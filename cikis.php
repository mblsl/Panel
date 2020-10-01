<?php
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
ob_start();
session_destroy();
echo '<script type="text/javascript">alert("                 Çıkış Yaptınız..!\nAnasayfaya Yönlendiriliyorsunuz...");</script>';
ob_end_flush();
?>
<meta http-equiv="refresh" content="0; url=login.php" />