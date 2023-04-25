<?php

include_once('../dbconnect.php');

$sql_companies = "SELECT * FROM `Companies` as c LEFT OUTER JOIN CompaniesDetails as cd ON cd.detail_id = c.id  LEFT OUTER JOIN `Ratings` as ra ON ra.Rating_id = c.id";
$companies = $dbh->query($sql_companies)->fetchAll(PDO::FETCH_ASSOC);

foreach ($companies as $company) {
  $company_id = $company['id'];
  print_r($company['id']); //id
  print_r($company['URL']); //URL
  print_r($company['photo']); //写真

  print_r($company['people']); //星
  print_r($company['support']); //星
  print_r($company['achievement']); //星
  print_r($company['speed']); //星
  print_r($company['amount']); //星
  //[rating_id] => 1 [people] => 3 [support] => 4 [achievement] => 2 [speed] => 4 [amount] => 5 

  $sql_points = $dbh->prepare("SELECT * FROM `GoodPoints` WHERE company_id = :company_id");
  $sql_points->bindValue(':company_id', $company_id);
  $sql_points->execute();
  $points_data = $sql_points->fetchAll(PDO::FETCH_ASSOC);

  print_r($points_data);
  //GoodPointのカラムで持ってこれる
}



?>