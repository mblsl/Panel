<?php
include("classData/vtclass.php");
$vtyedek = new Veritabani;
echo $vtyedek->GetIP();
$vtyedek->yedekle();
?>