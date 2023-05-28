<?php
session_start();
include_once("../../../../dbconnect.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    if (!empty($email) && !empty($password) &&!empty($newpassword) && !empty($confirmpassword)) {
      // 全部に値が入力してあるか true
        // メール一致したユーザーを取得
        $stmt = $dbh->prepare('SELECT * FROM ClientUsers WHERE mail = :email');
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $row_cnt = $stmt->rowCount();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($newpassword == $confirmpassword){
          // 新しいパスワードが確認用とあっているかどうか　True
          if ($row_cnt > 0 && password_verify($password, $result['password'])){
            // 現在のパスワードが正しいか　True
            // セッション管理するためにidを入れる、新しいパスワードを入力する
            $_SESSION['unique_id'] = $result['id'];
            $stmt = $dbh->prepare('UPDATE ClientUsers SET password = :password WHERE mail = :email');
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', password_hash($newpassword,PASSWORD_DEFAULT));
            $stmt->execute();
            echo 'success';
        } else {
          // 現在のパスワードが正しいか　False
            echo 'Eメールもしくはパスワードが、間違っています';
        }
        }else{
          // 新しいパスワードが確認用とあっているかどうか　False
          echo '確認用パスワードが入力したパスワードと異なっています';
        }
    } else {
      // 全部に値が入力してあるか false
        echo '全て入力してください';
    }
}
