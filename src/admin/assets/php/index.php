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

$sql_CompaniesStudentsLink = "SELECT Students.Name, Students.id as student_id, Students.registered_at, CompaniesStudentsLink.company_id, status, company, Companies.id as company_id ,Statuses.id as status_id FROM `CompaniesStudentsLink` 
inner join Students on CompaniesStudentsLink.Student_id = Students.id
inner join Companies on CompaniesStudentsLink.company_id = Companies.id
inner join Statuses on  CompaniesStudentsLink.status_id= Statuses.id 
order by Students.registered_at desc";
$CompaniesStudentsLink = $dbh->query($sql_CompaniesStudentsLink)->fetchAll(PDO::FETCH_ASSOC);



