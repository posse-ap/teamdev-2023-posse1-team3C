<?php
session_start();
include_once("../../../../dbconnect.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    if (!empty($email) && !empty($password) &&!empty($newpassword) && !empty($confirmpassword)) {
        $stmt = $dbh->prepare('SELECT * FROM ClientUsers WHERE mail = :email');
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $row_cnt = $stmt->rowCount();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($newpassword == $confirmpassword){
          if ($row_cnt > 0 && password_verify($password, $result['password'])){
            $_SESSION['unique_id'] = $result['id'];
            $stmt = $dbh->prepare('UPDATE ClientUsers SET password = :password WHERE mail = :email');
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', password_hash($newpassword,PASSWORD_DEFAULT));
            $stmt->execute();
            echo 'success';
        } else {
            echo 'Eメールもしくはパスワードが、間違っています';
        }
        }else{
          echo '確認用パスワードが入力したパスワードと異なっています';
        }
        
    } else {
        echo '全て入力してください';
    }
}
?>