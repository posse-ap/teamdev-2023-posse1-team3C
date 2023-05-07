<?php
  // 学生情報取得
  include_once('../dbconnect.php');
  $company_id = $_SESSION['unique_id'];
  
  $stmt = $dbh->prepare("SELECT name, stu.id, stu.registered_at, link.company_id, status, sta.id as status_id FROM `CompaniesStudentsLink` as link
  join Students as stu on link.Student_id = stu.id 
  join Statuses as sta on sta.id = link.status_id
  where link.company_id = :id");
  $stmt->bindValue(':id', $company_id);
  $stmt->execute();
  $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

//無効学生、有効学生の数を取得
  $stmt = $dbh->prepare("SELECT name, stu.id, stu.registered_at, link.company_id, status, sta.id as status_id FROM `CompaniesStudentsLink` as link
  join Students as stu on link.Student_id = stu.id 
  join Statuses as sta on sta.id = link.status_id
  where link.company_id = :id and status = '請求予定' or status = '請求済み'");
  $stmt->bindValue(':id', $company_id);
  $stmt->execute();
  $valid = $stmt->rowCount();

  $stmt = $dbh->prepare("SELECT name, stu.id, stu.registered_at, link.company_id, status, sta.id as status_id FROM `CompaniesStudentsLink` as link
  join Students as stu on link.Student_id = stu.id 
  join Statuses as sta on sta.id = link.status_id
  where link.company_id = :id and status = '無効'");
  $stmt->bindValue(':id', $company_id);
  $stmt->execute();
  $invalid = $stmt->rowCount();
?>

<!-- これだとがっくんとって来れないのなんでだろ
  SELECT stu.id,stu.name,stu.registered_at,sta.status from Students as stu 
  join Statuses as sta ON stu.id = sta.id
  join CompaniesStudentsLink as link on link.student_id = stu.id
  join Companies as com on com.id = link.company_id 
  where link.company_id= :id -->