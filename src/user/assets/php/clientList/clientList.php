<?php

include_once('../dbconnect.php');


//企業情報＋星の数持ってくる
$sql_companies = "SELECT c.id,c.company,c.URL,cd.photo,ra.people,ra.support,ra.achievement,ra.speed,ra.amount FROM `Companies` as c LEFT OUTER JOIN CompaniesDetails as cd ON cd.detail_id = c.id  LEFT OUTER JOIN `Ratings` as ra ON ra.Rating_id = c.id";
$companies = $dbh->query($sql_companies)->fetchAll(PDO::FETCH_ASSOC);

?>