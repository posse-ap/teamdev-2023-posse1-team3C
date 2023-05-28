<?php

  include_once('../dbconnect.php');
  $company_id = $_SESSION['unique_id'];

  // 学生情報取得
  $stmt = $dbh->prepare("SELECT name, stu.id, stu.registered_at, link.company_id, status, sta.id as status_id FROM `CompaniesStudentsLink` as link
  join Students as stu on link.Student_id = stu.id 
  join Statuses as sta on sta.id = link.status_id
  where link.company_id = :id
  order by registered_at desc");
  $stmt->execute([
    ':id' => $company_id
  ]);
  $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 有効学生の数を取得
  $stmt = $dbh->prepare("SELECT count(stu.id) from CompaniesStudentsLink as link
  join Students as stu on link.Student_id = stu.id
  join Statuses as sta on sta.id = link.status_id
  where link.company_id = :id and (link.status_id = 1)");
  $stmt->execute([
    ':id' => $company_id
  ]);
  $valid = $stmt->fetch();

  // 無効学生の数を取得
  $stmt = $dbh->prepare("SELECT count(stu.id) from CompaniesStudentsLink as link
  join Students as stu on link.Student_id = stu.id
  join Statuses as sta on sta.id = link.status_id
  where link.company_id = :id and link.status_id = 2");
  $stmt->execute([
    ':id' => $company_id
  ]);
  $invalid = $stmt->fetch();

  // 企業名を取得
  $stmt = $dbh->prepare("SELECT company FROM `Companies` where id = :id");
  $stmt->execute([
    ':id' => $company_id
  ]);
  $company = $stmt->fetch(PDO::FETCH_COLUMN);
