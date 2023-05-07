<?php
include_once('../../../../dbconnect.php');
$company_id = $_POST['company_id'];
$month = $_POST['month'].'%';

$stmt = $dbh->prepare('SELECT Name, Students.id, Students.registered_at, CompaniesStudentsLink.company_id, status, company, Statuses.id as status_id FROM `CompaniesStudentsLink` 
join Students on CompaniesStudentsLink.Student_id = Students.id
join Companies on Companies.id = CompaniesStudentsLink.company_id 
join Statuses on Statuses.id = status_id
where CompaniesStudentsLink.company_id = :id
and Students.registered_at LIKE :month
');
$stmt->bindValue(':id', $company_id);
$stmt->bindValue(':month', $month);

$stmt->execute();
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
$string= '';
foreach ($students as $student){
  $string .= '<tr class="border-b border-gray-200 dark:border-gray-700">
  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">'.$student["Name"] .
  '</th>
  <td class="px-6 py-4">
    '. $student["id"] .'
  </td>
  <td class="px-6 py-4">'.
    $student["registered_at"].
  '</td>
  <td class="px-6 py-4">
    '.$student["status"] .
  '</td>
  <td class="px-6 py-4">
    <a href="http://localhost:8080/admin/studentDetails.php?id='. $student["id"] .' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
      '. $student["id"] .'
    </a>
  </td>
</tr>';
}
echo $string;


















// $CompaniesStudentsLink = '';
// $resultMonthCompaniesStudents = '';
// if (isset($_POST["changeMonthButton"])) {
//   include("../../../../dbconnect.php");
//   $selected_month = $_POST['selected_month'];
//   $company_id = $_POST['company_id'];

// // 企業の月ごとの学生情報を取得
//   $sql_CompaniesStudentsLink = "SELECT Name, Students.id, Students.registered_at, CompaniesStudentsLink.company_id, status, company, Statuses.id as status_id FROM `CompaniesStudentsLink` join Students on CompaniesStudentsLink.Student_id = Students.id
//   join Companies on Companies.id = CompaniesStudentsLink.company_id 
//   join Statuses on Statuses.id = status_id
//   where CompaniesStudentsLink.company_id = :id
//   and DATE_FORMAT(Students.registered_at, '%Y-%m') = :selected_month
//   order by Students.registered_at desc";

//   $CompaniesStudentsLink = $dbh->prepare($sql_CompaniesStudentsLink);
//   $CompaniesStudentsLink->bindValue(":id", $_POST["company_id"], PDO::PARAM_INT);
//   $CompaniesStudentsLink->bindValue(":selected_month", $selected_month, PDO::PARAM_STR);
//   $CompaniesStudentsLink->execute();
//   $resultMonthCompaniesStudents = $CompaniesStudentsLink->fetch(PDO::FETCH_ASSOC);

//   // 企業詳細ページにリダイレクト
//   header("Location: ../../../../admin/clientDetails.php?id=$company_id");
// }
// 
// $CompaniesStudentsLink = $resultMonthCompaniesStudents;

// ex)企業id＝1の１月の学生情報を取得できる
// $sql_CompaniesStudentsLink = "SELECT Name, Students.id, Students.registered_at, CompaniesStudentsLink.company_id, status, company, Statuses.id as status_id FROM `CompaniesStudentsLink` join Students on CompaniesStudentsLink.Student_id = Students.id
// join Companies on Companies.id = CompaniesStudentsLink.company_id 
// join Statuses on Statuses.id = status_id
// where CompaniesStudentsLink.company_id = 1
// and DATE_FORMAT(Students.registered_at, '%Y-%m') = "2023-01"
// order by Students.registered_at desc";

// $resultMonthCompaniesStudentsを使って、企業詳細ページにリダイレクトするときに、foreachの変数に代入することができれな行けそう。


