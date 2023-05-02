<?php
if(isset($_POST["registerButton"])) {
  // 入力サれた企業基本情報をcompaniesテーブルに格納
  include("../../../../dbconnect.php");
  $sql_register_basic = "INSERT INTO Companies (company, mail, service, address, phoneNumber, registered_at, date, url, contactType, online) VALUES (:company, :mail, :address, :service, :phoneNumber, :registered_at ,:date, :url, :contactType, :online)";
  $register = $dbh->prepare($sql_register_basic);
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

  // 掲載情報をCompaniesDetailsテーブルに格納
  // 画像をアップロード
  $dir_path = dirname(__FILE__) . "/../../img/heroes" . "/" . $_POST
  ["company"] . "/";
  if (!is_dir($dir_path)) {
    mkdir($dir_path, 0777);
  }
  $image_name = uniqid(mt_rand(), true) . "." . substr(strrchr($_FILES["heroImage"]["name"], "."), 1);
  $image_path = $dir_path . $image_name;
  move_uploaded_file(
    $_FILES["heroImage"]["tmp_name"],
    $image_path
  );

  $sql_register_details = "INSERT INTO CompaniesDetails (detail_id,photo) values (:detail_id, :photo)";
  $register_details = $dbh->prepare($sql_register_details);
  $register_details->execute([
    ":detail_id" => $dbh->lastInsertId(),
    ":photo" => $image_name
  ]);
  
  // 星評価をRatingsテーブルに格納
  $sql_register_ratings = "INSERT INTO Ratings (rating_id, people, support, achievement, speed, amount) values (:rating, :people, :support, :achievement, :speed, :amount)";
  $register_ratings = $dbh->prepare($sql_register_ratings);
  $register_ratings->execute([
    ":rating" => $dbh->lastInsertId(),
    ":people" => $_POST["people"],
    ":support" => $_POST["support"],
    ":achievement" => $_POST["achievement"],
    ":speed" => $_POST["speed"],
    ":amount" => $_POST["amount"]
  ]);

  // 企業一覧ページに戻る
  header("Location: ../../../../admin/clientList.php");
}