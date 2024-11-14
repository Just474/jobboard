<?php
$servername = "MySQL-8.2";
$username = "root";
$password = "";
$dbname = "jobboard";

return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);