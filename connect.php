<?php

$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli('localhost:8080', $user, $pass, $db) or die ("unable to connect");

echo"Great work";
?>
