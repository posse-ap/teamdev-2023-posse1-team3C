<?php
// 企業基本情報を取得
$sql_company = "SELECT * FROM `Companies` where id = :id";
$company = $dbh->prepare($sql_company);
$company->bindValue(":id", $_GET["id"], PDO::PARAM_INT);
$company->execute();
$resultcompany=  $company->fetch();