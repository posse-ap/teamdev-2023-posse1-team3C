<?php
session_start();
include_once("../../../../dbconnect.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $stmt = $dbh->prepare('SELECT * FROM AdminUsers WHERE mail = :email');
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $row_cnt = $stmt->rowCount();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row_cnt > 0 && password_verify($password, $result['password'])){
            $_SESSION['unique_id'] = $result['id'];
            echo 'success';
        } else {
            echo 'Eメールもしくはパスワードが、間違っています';
        }
    } else {
        echo '全て入力してください';
    }
}
?>

