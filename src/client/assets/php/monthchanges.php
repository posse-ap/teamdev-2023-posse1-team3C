<?php
session_start();
include_once('../../../dbconnect.php');
$company_id = $_SESSION['unique_id'];
$month = $_POST['month'].'%';


$stmt = $dbh->prepare('SELECT name, stu.id, stu.registered_at, link.company_id, status, sta.id as status_id FROM `CompaniesStudentsLink` as link
join Students as stu on link.Student_id = stu.id 
join Statuses as sta on sta.id = link.status_id
where link.company_id= :id
and stu.registered_at LIKE :month
order by registered_at desc');

$stmt->execute([
    ':id' => $company_id,
    ':month' => $month
]);
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
$string= '';
foreach ($students as $student){
  $string .='<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700"><th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">'. $student['name'] .
                    '</th>
                    <td class="px-6 py-4">'.$student['registered_at'].
                    '</td>
                    <td class="px-6 py-4">'
                    . $student['status'] .
                    '</td>
                    <td class="px-6 py-4">
                        <a href="studentDetails.php?id='.$student['id'] . '" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">詳細</a>
                    </td>
                </tr>';
}
echo $string;

?>