<?php
$CompaniesStudentsLink = '';
$resultMonthCompaniesStudents = '';
if (isset($_POST["changeMonthButton"])) {
  include("../../../../dbconnect.php");
  $selected_month = $_POST['selected_month'];
  $company_id = $_POST['company_id'];

// 企業の月ごとの学生情報を取得
  $sql_CompaniesStudentsLink = "SELECT Name, Students.id, Students.registered_at, CompaniesStudentsLink.company_id, status, company, Statuses.id as status_id FROM `CompaniesStudentsLink` join Students on CompaniesStudentsLink.Student_id = Students.id
  join Companies on Companies.id = CompaniesStudentsLink.company_id 
  join Statuses on Statuses.id = status_id
  where CompaniesStudentsLink.company_id = :id
  and DATE_FORMAT(Students.registered_at, '%Y-%m') = :selected_month
  order by Students.registered_at desc";

  $CompaniesStudentsLink = $dbh->prepare($sql_CompaniesStudentsLink);
  $CompaniesStudentsLink->bindValue(":id", $_POST["company_id"], PDO::PARAM_INT);
  $CompaniesStudentsLink->bindValue(":selected_month", $selected_month, PDO::PARAM_STR);
  $CompaniesStudentsLink->execute();
  $resultMonthCompaniesStudents = $CompaniesStudentsLink->fetch(PDO::FETCH_ASSOC);

  // 企業詳細ページにリダイレクト
  header("Location: ../../../../admin/clientDetails.php?id=$company_id");
}
// 
$CompaniesStudentsLink = $resultMonthCompaniesStudents;

// ex)企業id＝1の１月の学生情報を取得できる
// $sql_CompaniesStudentsLink = "SELECT Name, Students.id, Students.registered_at, CompaniesStudentsLink.company_id, status, company, Statuses.id as status_id FROM `CompaniesStudentsLink` join Students on CompaniesStudentsLink.Student_id = Students.id
// join Companies on Companies.id = CompaniesStudentsLink.company_id 
// join Statuses on Statuses.id = status_id
// where CompaniesStudentsLink.company_id = 1
// and DATE_FORMAT(Students.registered_at, '%Y-%m') = "2023-01"
// order by Students.registered_at desc";

// $resultMonthCompaniesStudentsを使って、企業詳細ページにリダイレクトするときに、foreachの変数に代入することができれな行けそう。


