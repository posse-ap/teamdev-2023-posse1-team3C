<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRAFT 企業詳細ページ</title>
  <link rel="stylesheet" href="./assets/styles/normalize.css">
  <link rel="stylesheet" href="./assets/styles/common.css">
  <link rel="stylesheet" href="./assets/styles/favorite.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" defer></script>
  <script src="./assets/scripts/favorite/favorite.js" defer></script>
</head>

<body>
<?php include_once('components/header.php') ?>
<?php include_once('components/menubar.php')?>


<main>
  <h2 class="top-favorite">お気に入り一覧</h2>


<div class="lets-favorite">
  現在のあなたのお気に入り一覧はこちら
  <br>
  チェックをつけて一括登録しよう！
</div>

<form id="favoriteForm" action="./register.php" method="POST">
  <div id="service-alert"></div>
  <div class="service-wrapper" id="service-wrapper">
    <!-- お気に入り企業の一覧をここに表示する -->
  </div>

  <button class="subscribe" type="submit" name="submitButton" id="submit-button">一括登録する<i class="fa-solid fa-caret-right"></i>
</button>
</form>

</main>
<!-- フッター -->
<?php include_once('components/footer.php') ?>
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>