<?php
    include_once("config.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)){
      $stmt3 = $pdo->prepare('select * from users where email = :email');
      // 値をバインド
      $stmt3->bindValue(':email', $email);
      $stmt3->execute();
      $row_cnt = $stmt3->rowCount();
      $result = $stmt3->fetch(PDO::FETCH_ASSOC);
      if($row_cnt>0 && password_verify($password, $result['password'])){
        $_SESSION['unique_id'] = $result['unique_id'];
        echo 'success';
      }else{
        echo 'Eメールもしくはパスワードが、間違っています';
      }
    }
    else{
      echo '全て入力してください';
    }
?>