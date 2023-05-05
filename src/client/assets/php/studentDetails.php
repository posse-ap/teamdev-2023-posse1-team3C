<?php
include_once('../dbconnect.php');
$student_id = $_GET['id'];

$stmt = $dbh->prepare('SELECT * from Students as stu inner join Statuses as sta ON stu.id = sta.id WHERE stu.id = :id');
$stmt->bindValue(':id', $student_id);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);


?>