<?php

$server="localhost";
$username = "root";
$password = "";
$database = "db_lubaba";

$conec = mysql_connect($server,$username,$password,$database);
$select_db = mysql_select_db($database, $conec) or die ('gagal koneksi');

?>