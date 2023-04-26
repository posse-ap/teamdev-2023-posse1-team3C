<?php
// 学生id,企業id,ステータスidが一致するCompaniesStudentsLink中間テーブルのidを取得
if (isset($_POST["studentDetailsButton"])) {
  include("../../../dbconnect.php");
  $sql_CompaniesStudentsLink_id = "SELECT id FROM `CompaniesStudentsLink` where Student_id = :id and company_id = :company_id and status_id = :status_id";
  $CompaniesStudentsLink_id = $dbh->prepare($sql_CompaniesStudentsLink_id);
  $CompaniesStudentsLink_id->bindValue(":id", $_POST["student_id"], PDO::PARAM_INT);
  $CompaniesStudentsLink_id->bindValue(":company_id",  $_POST["company_id"], PDO::PARAM_INT);
  $CompaniesStudentsLink_id->bindValue(":status_id", $_POST["status_id"], PDO::PARAM_INT);
  $CompaniesStudentsLink_id->execute();
  $resultCompaniesStudentsLink_id = $CompaniesStudentsLink_id->fetch();

  header("Location: ../../../admin/studentDetails.php?id=" . $resultCompaniesStudentsLink_id["id"]);
}

$sql_CompaniesStudentsLink = "SELECT Name, Students.id as student_id, Students.registered_at, CompaniesStudentsLink.company_id, status, company, Statuses.id as status_id FROM `CompaniesStudentsLink` join Students on CompaniesStudentsLink.Student_id = Students.id 
join Companies on Companies.id = CompaniesStudentsLink.company_id 
join Statuses on Statuses.id = status_id";
$CompaniesStudentsLink = $dbh->query($sql_CompaniesStudentsLink)->fetchAll(PDO::FETCH_ASSOC);

// 学生名、学生id、登録日、企業名、statusを取得
// echo "<pre>";
// print_r($CompaniesStudentsLink);
// echo "</pre>";

