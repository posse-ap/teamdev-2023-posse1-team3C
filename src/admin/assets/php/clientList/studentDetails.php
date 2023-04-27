<?php
// 詳細画面に出てくるものを取得
$sql_studentDetail = "SELECT CompaniesStudentsLink.id as id , Name, furigana, sex, graduated_year, university, faculty, department, prefecture, Students.phoneNumber, Students.mail, Students.id as student_id, Students.registered_at, CompaniesStudentsLink.company_id, status, company ,Statuses.id as status_id FROM `CompaniesStudentsLink` join Students on CompaniesStudentsLink.Student_id = Students.id
join Companies on Companies.id = CompaniesStudentsLink.company_id
join Statuses on Statuses.id = status_id
where Students.id = :id and CompaniesStudentsLink.company_id = :company_id and Statuses.id = :status_id";

// クエリーパラメーターを使って、学生id,企業id,ステータスidを取得
$sql_companiesStudentsLink_id = "SELECT student_id, status_id , company_id FROM `CompaniesStudentsLink` where id = :id";
$companiesStudentsLink_id = $dbh->prepare($sql_companiesStudentsLink_id);
$companiesStudentsLink_id->bindValue(":id", $_GET["id"], PDO::PARAM_INT);
$companiesStudentsLink_id->execute();
$resultCompaniesStudentsLink_id = $companiesStudentsLink_id->fetch();


$studentDetail = $dbh->prepare($sql_studentDetail);
$studentDetail->bindValue(":id", $resultCompaniesStudentsLink_id["student_id"], PDO::PARAM_INT);
$studentDetail->bindValue(":company_id",  $resultCompaniesStudentsLink_id["company_id"], PDO::PARAM_INT);
$studentDetail->bindValue(":status_id", $resultCompaniesStudentsLink_id["status_id"], PDO::PARAM_INT);
$studentDetail->execute();
$resultStudentDetails = $studentDetail->fetch();


