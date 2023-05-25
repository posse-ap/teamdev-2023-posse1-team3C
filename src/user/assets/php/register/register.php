<?php
if (isset($_POST["registerButton"])) {
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
  // 登録した学生のidを取得
  $student_id = $dbh->lastInsertId();

  // 企業IDの配列を取得
  $company_ids = $_POST['company_id'];

  // CompaniesStudentsLink テーブルに企業ごとのデータを登録
  $sql_register_link = "INSERT INTO CompaniesStudentsLink (student_id, company_id, status_id) VALUES (:student_id, :company_id, :status_id)";
  $register = $dbh->prepare($sql_register_link);


  // 各企業IDごとに登録処理を行う
  foreach ($company_ids as $company_id) {
    $register->execute([
      ":student_id" => $student_id,
      ":company_id" => $company_id,
      ":status_id" => 1
    ]);
  }

  // 各企業idから企業名を取得
  $sql_get_company_name = "SELECT service FROM Companies WHERE id = :company_id";
  $get_company_name = $dbh->prepare($sql_get_company_name);
  foreach($company_ids as $company_id) {
    $get_company_name->execute([
      ":company_id" => $company_id
    ]);
    $company_name = $get_company_name->fetch(PDO::FETCH_ASSOC);
    $company_names[] = $company_name["service"];
  }

  // 学生に登録内容、登録企業をメールで送信
  $to = $_POST["email"];
  $subject = "【株式会社CRAFT】個人登録完了のお知らせ";
  $from = "admin@example.com";
  $message = "<html>
  <head>
    <title>登録完了のお知らせ</title>
  </head>
  <body>
    <p>この度は、就活サイトにご登録いただきありがとうございます。</p>
    <p>以下の内容で登録が完了しました。</p>
    <ul>
      <li>お名前：" . $name . "</li>
      <li>ふりがな：" . $furigana . "</li>
      <li>電話番号：" . $_POST['phoneNumber'] . "</li>
      <li>メールアドレス：" . $_POST['email'] . "</li>
      <li>住まいの都道府県：" . $_POST['prefecture'] . "</li>
      <li>卒業年度：" . $_POST['graduated_year'] . "</li>
      <li>大学名：" . $_POST['university'] . "</li>
      <li>学部学科：" . $_POST['faculty'] . $_POST['department'] . "</li>
    </ul>
    <p>登録したサービスは以下の通りです。</p>
    <ul>
      <li>" . implode("</li><li>", $company_names) . "</li>
    </ul>
  </body>
  </html>";
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "From: $from\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n" . "Content-Transfer-Encoding: base64\r\n";
  
  // メール送信
  mb_send_mail($to, $subject, $message, $headers);




  // 申し込み完了画面にリダイレクト
  header("Location: ../../../../user/complete.php");
  exit;
}
