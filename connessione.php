<?php
// Connecting, selecting database
$dbname= "postgres";
$host="localhost";
$port="";
$user="";
$password="";

$dbconn = pg_connect("dbname=".$dbname." host=".$host." port=".$port." user='".$user."' password='".$password."'")
or die('Could not connect: ' . pg_last_error());
?>