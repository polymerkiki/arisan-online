<?php
$server = "localhost";
$user = "root";
$spass = "";
$db = "db_arisan";

$koneksi =  mysqli_connect($server, $user, $spass, $db) or die(mysqli_connect_error());
