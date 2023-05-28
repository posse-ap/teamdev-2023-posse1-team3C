<?php
$dsn = 'mysql:dbname=TEAMDEV;host=db';
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn, $user, $password);

$sql_companies = "SELECT * FROM `Companies`";
$companies = $dbh->query($sql_companies)->fetchAll(PDO::FETCH_ASSOC);
