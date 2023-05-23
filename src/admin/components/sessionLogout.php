<?php
session_start();
if (!isset($_SESSION["unique_email"])) {
  header("Location: ./auth/signin.php");
  exit();
}
?>