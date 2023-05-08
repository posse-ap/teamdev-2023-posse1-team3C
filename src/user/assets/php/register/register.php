<?php
if(isset($_POST["registerButton"])) {
  // 入力された学生の情報をstudentsテーブルに登録する
  include("../../../../dbconnect.php");
  $sql_register_basic = "INSERT INTO Students (name, furigana, sex, email, phoneNumber, registered_at, graduated_year, university, faculty, department, prefecture) VALUES (:name, :furigana, :sex, :email, :phoneNumber, :registered_at ,:graduated_year, :university, :faculty, :department, :prefecture)";
  $register = $dbh->prepare($sql_register_basic);
  $name = $_POST["last-name"] . $_POST["first-name"];
  $furigana = $_POST["last-name-kana"] . $_POST["first-name-kana"];
  $register->execute([
    ":name" => $name,
    ":furigana" => $furigana,
    ":sex" => $_POST["sex"],
    ":email" => $_POST["email"],
    ":phoneNumber" => $_POST["phoneNumber"],
    ":registered_at" => date("Y-m-d H:i:s"),
    ":graduated_year" => $_POST["graduated_year"],
    ":university" => $_POST["university"],
    ":faculty" => $_POST["faculty"],
    ":department" => $_POST["department"],
    ":prefecture" => $_POST["prefecture"]
  ]);

  // 登録した学生のidと企業idをstudents_companies_linkテーブルに登録する
  $student_id = $dbh->lastInsertId();
  $sql_register_link = "INSERT INTO CompaniesStudentsLink (student_id, company_id, status_id) VALUES (:student_id, :company_id, :status_id)";
  $register = $dbh->prepare($sql_register_link);
  $register->execute([
    ":student_id" => $student_id,
    ":company_id" => $_POST["company_id"],
    ":status_id" => 1
  ]);


  // 申し込み完了画面にリダイレクト
  header("Location: ../../../../user/complete.php");
}