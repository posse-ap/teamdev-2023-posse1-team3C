<?php
// 企業基本情報を取得
$sql_company = "SELECT * FROM `Companies` where id = :id";
$company = $dbh->prepare($sql_company);
$company->bindValue(":id", $_GET["id"], PDO::PARAM_INT);
$company->execute();
$resultcompany=  $company->fetch();

// 企業ごとの学生情報を取得
$sql_CompaniesStudentsLink = "SELECT Name, Students.id, Students.registered_at, CompaniesStudentsLink.company_id, status, company, Statuses.id as status_id FROM `CompaniesStudentsLink` join Students on CompaniesStudentsLink.Student_id = Students.id 
join Companies on Companies.id = CompaniesStudentsLink.company_id 
join Statuses on Statuses.id = status_id
where CompaniesStudentsLink.company_id = :id
order by Students.registered_at desc";
$CompaniesStudentsLink = $dbh->prepare($sql_CompaniesStudentsLink);
$CompaniesStudentsLink->bindValue(":id", $_GET["id"], PDO::PARAM_INT);
$CompaniesStudentsLink->execute();

// 企業毎に登録されている全ての学生の数を取得
$sql_countStudents = "SELECT COUNT(*) as totalStudents FROM `CompaniesStudentsLink` where company_id = :id";
$countStudents = $dbh->prepare($sql_countStudents);
$countStudents->bindValue(":id", $_GET["id"], PDO::PARAM_INT);
$countStudents->execute();
$resultCountStudents = $countStudents->fetch();

// 企業毎に登録されている無効な学生の数を取得
$sql_countStudentsInvalid = "SELECT COUNT(*) as totalStudentsInvalid FROM `CompaniesStudentsLink` where company_id = :id and status_id = 3";
$countStudentsInvalid = $dbh->prepare($sql_countStudentsInvalid);
$countStudentsInvalid->bindValue(":id", $_GET["id"], PDO::PARAM_INT);
$countStudentsInvalid->execute();
$resultCountStudentsInvalid = $countStudentsInvalid->fetch();
