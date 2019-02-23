<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = @mysql_connect($servername, $username, $password) or die("Servera Baðlanýlamadý");
@mysql_select_db('panel') or die("Veri Tabanýna Baðlanýlamadý");



?>