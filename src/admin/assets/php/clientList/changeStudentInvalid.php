<?php
if (isset($_POST["invalidSubmit"])) {
  include("../../../../dbconnect.php");
  // 学生を無効にするために必要な情報を取得
  $sql_changeStudentInvalid = "UPDATE `CompaniesStudentsLink` SET status_id = 3 where Student_id = :id and company_id = :company_id";
  $changeStudentInvalid = $dbh->prepare($sql_changeStudentInvalid);
  $changeStudentInvalid->bindValue(":id", $_POST["student_id"], PDO::PARAM_INT);
  $changeStudentInvalid->bindValue(":company_id", $_POST["company_id"], PDO::PARAM_INT);
  $changeStudentInvalid->execute();

  // 企業詳細画面にリダイレクト
  $studentDetailsPageURL = "http://localhost:8080/admin/clientDetails.php?id=" . $_POST["company_id"];
  header("Location: $studentDetailsPageURL");
}
