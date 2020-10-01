<?php
$gelenveri = explode("-", $_GET["wd"]);
if($gelenveri[0]=="msks" && $gelenveri[1]!="")
echo '<script>window.location ="../index.php#msks-'.$gelenveri[1].'";</script>';
?>