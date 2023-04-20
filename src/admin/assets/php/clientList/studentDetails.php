<?php
// 詳細画面に出てくるものを取得
$sql_studentDetail = "SELECT Name, furigana, sex, graduated_year, university, faculty, department, prefecture, Students.phoneNumber, Students.mail, Students.id, Students.registered_at, CompaniesStudentsLink.company_id, status, company ,Statuses.id as status_id FROM `CompaniesStudentsLink` join Students on CompaniesStudentsLink.Student_id = Students.id
join Companies on Companies.id = CompaniesStudentsLink.company_id
join Statuses on Statuses.id = status_id
where Students.id = :id and CompaniesStudentsLink.company_id = :company_id and Statuses.id = :status_id";


$studentDetail = $dbh->prepare($sql_studentDetail);
$id = $_GET["id"];
$company_id = $_GET["company_id"];
$status_id = $_GET["status_id"];

$studentDetail->bindValue(":id", $id, PDO::PARAM_INT);
$studentDetail->bindValue(":company_id", $company_id, PDO::PARAM_INT);
$studentDetail->bindValue(":status_id", $status_id, PDO::PARAM_INT);
$studentDetail->execute();
$resultStudentDetails = $studentDetail->fetch();


