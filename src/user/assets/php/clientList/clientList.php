<?php

include_once('../dbconnect.php');


//企業情報＋星の数持ってくる
// この時、掲載期間内の企業のみを持ってくる
$sql_companies = "SELECT c.id,c.service,c.URL,cd.photo,ra.people,ra.support,ra.achievement,ra.speed,ra.amount, c.finished_at, c.started_at FROM `Companies` as c LEFT OUTER JOIN CompaniesDetails as cd ON cd.detail_id = c.id  LEFT OUTER JOIN `Ratings` as ra ON ra.Rating_id = c.id where finished_at > now() and started_at < now()";
$companies = $dbh->query($sql_companies)->fetchAll(PDO::FETCH_ASSOC);

?>