<?php
session_start();

// セッションを破棄する
session_destroy();

// ログアウト後の処理（例：ログインページにリダイレクトする）
header("location: ../../../auth/signin.php");
exit();
?>