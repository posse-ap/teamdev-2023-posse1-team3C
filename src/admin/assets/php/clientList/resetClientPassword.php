<?php
// 生成、再設定ボタンが押されたら
if (isset($_POST["resetSubmit"])) {
  include("../../../../dbconnect.php");
  $company_id = $_POST["company_id"];
  $company_mail = $_POST["company_mail"];
  $created_at = Date("Y-m-d H:i:s");
  // ランダムな文字列を出力し、それをパスワードとする
  $password = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 8);

  // 企業ごとの詳細画面で生成されるalertを表示
  $passwordAlert = "alert('パスワードを再設定しました。変更後のパスワードは" . $password . "です')";
  // パスワードをハッシュ化
  $hashPassword = password_hash($password, PASSWORD_DEFAULT);

  // ハッシュ化したパスワードをDBに格納
  $sql_resetPassword = "UPDATE ClientUsers SET password = :password ,updated_at = :updated_at WHERE email = :company_mail and company_id = :id";
  $resetPassword = $dbh->prepare($sql_resetPassword);
  $resetPassword->execute([
    ":password" => $hashPassword,
    ":id" => $company_id,
    ":company_mail" => $company_mail,
    ":updated_at" => $created_at
  ]);

  // 生成したパスワードをメールで送信
  $to = $company_mail;
  $subject = "パスワード再設定";
  $from = "sender@example.com";
  $message = "<html><body><h2>". $_POST["company_name"]. "様</h2><p>株式会社boozerです。いつもお世話になっております。</p><p>パスワード再設定の連絡を受け、パスワードを再設定しました。</p><p>再設定後のパスワードは <b>" . $password . "</b> です。</p><p>今度ともよろしくお願いします。</p></body></html>" ;
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "From: $from  \r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8" ."\r\n". "Content-Transfer-Encoding: base64\r\n";

  // メール送信
  mb_send_mail($to, $subject, $message, $headers);

  // 企業ごとの詳細画面に戻る
  header("Location: ../../../../admin/clientDetails.php?id=$company_id");
}
