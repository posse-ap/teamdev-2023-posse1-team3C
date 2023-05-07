<?php
include_once('../dbconnect.php');
$student_id = $_GET['id'];

$stmt = $dbh->prepare('SELECT name,stu.furigana,stu.sex,stu.university,stu.faculty,stu.department,stu.graduated_year,stu.prefecture,stu.phoneNumber,stu.email, sta.status FROM `CompaniesStudentsLink` as link
join Students as stu on link.Student_id = stu.id 
join Statuses as sta on sta.id = link.status_id
where stu.id = :id
');
$stmt->bindValue(':id', $student_id);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);


?>