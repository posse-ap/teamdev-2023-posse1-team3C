<?php 

$sql_CompaniesStudentsLink = "SELECT Name, Students.id, Students.registered_at, CompaniesStudentsLink.company_id, status, company, Statuses.id as status_id FROM `CompaniesStudentsLink` join Students on CompaniesStudentsLink.Student_id = Students.id 
join Companies on Companies.id = CompaniesStudentsLink.company_id 
join Statuses on Statuses.id = status_id";
$CompaniesStudentsLink = $dbh->query($sql_CompaniesStudentsLink)->fetchAll(PDO::FETCH_ASSOC);

// 学生名、学生id、登録日、企業名、statusを取得
// echo "<pre>";
// print_r($CompaniesStudentsLink);
// echo "</pre>";


