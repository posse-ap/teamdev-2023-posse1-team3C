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
  $sql_resetPassword = "UPDATE ClientUsers SET password = :password WHERE mail = :company_mail and id = :id";
  $resetPassword = $dbh->prepare($sql_resetPassword);
  $resetPassword->bindValue(":password", $hashPassword, PDO::PARAM_STR);
  $resetPassword->bindValue(":id", $company_id, PDO::PARAM_INT);
  $resetPassword->bindValue(":company_mail", $company_mail, PDO::PARAM_STR);
  $resetPassword->execute();

  // 生成したパスワードをメールで送信
  $to = $company_mail;
  $subject = "パスワード再設定";
  $from = "sender@example.com";
  $message = "<html><body><p>パスワードを再設定しました。</p><p>再設定後のパスワードは <b>" . $password . "</b> です。</p></body></html>" ;
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "From: $from  \r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8" ."\r\n". "Content-Transfer-Encoding: base64\r\n";

  // メール送信
  mb_send_mail($to, $subject, $message, $headers);

  // 企業ごとの詳細画面に戻る
  header("Location: ../../../../admin/clientDetails.php?id=$company_id");
}
