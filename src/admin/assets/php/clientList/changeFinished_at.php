<?php
// buttonが押されたら、
if(isset($_POST["submit"])) {
  include("../../../../dbconnect.php");
  // 企業IDと掲載終了日を取得
  $company_id = $_POST["company_id"];
  $selected_at = $_POST["selected_at"];
    // 掲載終了日をdatetime型に変換
    $selected_at_datetime = date("Y-m-d 23:59:59", strtotime($selected_at));
  // 掲載終了日を更新
  $sql_update = "UPDATE `Companies` SET `finished_at` = :selected_at WHERE `Companies`.`id` = :company_id";
  $update = $dbh->prepare($sql_update);
  $update->bindValue(":selected_at", $selected_at_datetime, PDO::PARAM_STR);
  $update->bindValue(":company_id", $company_id, PDO::PARAM_INT);
  $update->execute();
  // 企業詳細ページにリダイレクト
  header("Location: ../../../../admin/clientList.php ");
}


