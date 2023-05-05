<?php
// 学生情報取得
  include_once('../dbconnect.php');
  $sql_students = "SELECT stu.id,stu.name,stu.registered_at,sta.status from Students as stu inner join Statuses as sta ON stu.id = sta.id";
  $students = $dbh->query($sql_students)->fetchAll(PDO::FETCH_ASSOC);

//無効学生、有効学生の数を取得
  $sql_stu_count = "SELECT COUNT(stu.id) from Students as stu inner join Statuses as sta ON stu.id = sta.id where status = '請求予定' or status = '請求済み'";
  $valid = $dbh->query($sql_stu_count)->fetch(PDO::FETCH_NUM)[0];

  $sql_stu_count2 = "SELECT COUNT(stu.id) from Students as stu inner join Statuses as sta ON stu.id = sta.id where status = '無効'";
  $invalid = $dbh->query($sql_stu_count2)->fetch(PDO::FETCH_NUM)[0];
?>