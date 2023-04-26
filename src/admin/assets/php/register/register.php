<?php
if(isset($_POST["registerButton"])) {
  // 入力サれた企業基本情報をcompaniesテーブルに格納
  include("../../../../dbconnect.php");
  $sql_register = "INSERT INTO Companies (company, mail, service, address, phoneNumber, registered_at, date, url, contactType, online) VALUES (:company, :mail, :address, :service, :phoneNumber, :registered_at ,:date, :url, :contactType, :online)";
  $register = $dbh->prepare($sql_register);
  $register->bindValue(":company", $_POST["company"], PDO::PARAM_STR);
  $register->bindValue(":service", $_POST["service"], PDO::PARAM_STR);
  $register->bindValue(":address", $_POST["address"], PDO::PARAM_STR);
  $register->bindValue(":phoneNumber", $_POST["phoneNumber"], PDO::PARAM_STR);
  $register->bindValue(":mail", $_POST["mail"], PDO::PARAM_STR);
  $register->bindValue(":date", $_POST["date"], PDO::PARAM_STR);
  $register->bindValue(":url", $_POST["url"], PDO::PARAM_STR);
  $register->bindValue(":online", $_POST["online"], PDO::PARAM_STR);
  $register->bindValue(":contactType", $_POST["contactType"], PDO::PARAM_STR);
  $register->bindValue(":registered_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
  $register->execute();

  // 企業一覧ページに戻る
  header("Location: ../../../../admin/clientList.php");
}