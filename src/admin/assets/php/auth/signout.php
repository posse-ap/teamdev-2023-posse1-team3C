<?php
// ログアウトボタンを押したら、ログアウトする
if (isset($_POST["signout"])) {
  session_start();
  $_SESSION = array();
  session_destroy();
  header("Location: http://localhost:8080/admin/auth/signin.php");
}