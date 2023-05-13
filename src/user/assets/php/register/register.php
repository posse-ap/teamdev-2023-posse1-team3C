<?php
if(isset($_POST["registerButton"])) {
  // メールアドレスが不正な形式の場合はエラーを返す
  $pattern = '/^[a-zA-Z0-9_\.\-]+?@[A-Za-z0-9_\.\-]+$/';
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    header("Location: ../../../../user/register.php?company_id=" . $_POST["company_id"] . "&error=invalidEmail");
    // エラーメッセージをセッションに格納
    $_SESSION["error"] = "メールアドレスの形式が正しくありません";
    exit();
  }
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

  // 企業idから企業名を取得する
  $sql_get_company_name = "SELECT company FROM Companies where id = :id";
  $stmt = $dbh->prepare($sql_get_company_name);
  $stmt->execute([
    ":id" => $_POST["company_id"]
  ]);
  $company_name = $stmt->fetch(PDO::FETCH_COLUMN);

  // 登録した学生宛にメールを送信する
  $to = $_POST["email"];
  $subject = "【就活管理アプリ】企業申し込み完了のお知らせ";
  $from = "admin@example.com";
  $table = "<table>";
  foreach($_POST as $key => $value) {
    switch($key) {
      case "last-name":
        $table .= "<tr><td>姓</td><td>". $value ."</td></tr>";
        break;
      case "first-name":
        $table .= "<tr><td>名</td><td>". $value ."</td></tr>";
        break;
      case "last-name-kana":
        $table .= "<tr><td>セイ</td><td>". $value ."</td></tr>";
        break;
      case "first-name-kana":
        $table .= "<tr><td>メイ</td><td>". $value ."</td></tr>";
        break;
      case "sex":
        $table .= "<tr><td>性別</td><td>". $value ."</td></tr>";
        break;
      case "graduated_year":
        $table .= "<tr><td>卒業年度</td><td>". $value ."</td></tr>";
        break;
      case "university":
        $table .= "<tr><td>大学名</td><td>". $value ."</td></tr>";
        break;
      case "faculty":
        $table .= "<tr><td>学部名</td><td>". $value ."</td></tr>";
        break;
      case "department":
        $table .= "<tr><td>学科名</td><td>". $value ."</td></tr>";
        break;
      case "prefecture":
        $table .= "<tr><td>都道府県</td><td>". $value ."</td></tr>";
        break;
      case "phoneNumber":
        $table .= "<tr><td>電話番号</td><td>". $value ."</td></tr>";
        break;
      case "email":
        $table .= "<tr><td>メールアドレス</td><td>". $value ."</td></tr>";
        break;
    }
  }
  $table .= "</table>";
  $support = "<p>※本メールにお心当たりのない方は、お手数ですが下記までご連絡ください。</p><p>株式会社boozer</p><p>〒000-0000</p><p>東京都千代田区丸の内1-1-1</p><p>TEL: 03-0000-0000</p><p>MAIL:". $from ."</p>";
  $message = "<html><body><p>". $_POST["last-name"] . $_POST["first-name"] . "様</p><p>日頃より株式会社boozer提供ツール（以下弊社ツール）をご利用いただき、誠にありがとうございます。。</p><p>以下の内容で企業への登録が完了しました。</p><p>登録企業". $company_name ."</p><p>登録内容</p> ". $table ."<p>今後とも変わらぬご愛顧を賜りますようお願い申し上げます。</p>" . $support ."</body></html>" ;
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "From: $from  \r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n" . "Content-Transfer-Encoding: base64\r\n";
  // メール送信
  mb_send_mail($to, $subject, $message, $headers);


  // 申し込み完了画面にリダイレクト
  header("Location: ../../../../user/complete.php");
}