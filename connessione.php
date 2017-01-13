<?php
// Connecting, selecting database
$dbname= "postgres";
$host="localhost";
$port="5432";
$user="postgres";
$password="lelFAIGT420";

$dbconn	= new PDO("pgsql:host=".$host.";port=".$port.";dbname=".$dbname, $user, $password);
$dbconn -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>