<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set("display_errors","Off");

$host="mysql.idhostinger.com";
$user="u161384276_reuni";
$pass="adminqwert1";
$db="u161384276_reuni";

$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);
?>