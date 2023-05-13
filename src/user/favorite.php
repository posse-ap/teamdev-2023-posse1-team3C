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

<main>
  <h2 class="top-favorite">お気に入り一覧</h2>


  <div class="lets-favorite">現在のあなたのお気に入り一覧はこちら<br><br>チェックをつけて一括登録しよう！</div>



  <div class="service-box">
    <div class="container">
      <label>
        <input type="checkbox" class="checkbox">
        <span class="checkbox-fontas"></span>
      </label>
      <div class="s-container">
        <div class="service-name">サービスA</div>
        <div class="browsing-history">最終閲覧履歴2023/02/21</div>
      </div>
    </div>
    <div class="button-container">
      <a href="" target="_blank">
        <div class="official-page">公式ページ<i class="fa-solid     fa-arrow-up-right-from-square"></i></div>
      </a>
      <a href="">
        <div class="detail-page">詳細ページ<i class="fa-solid     fa-chevron-right"></i></div>
      </a>
      <div class="subscribe-favorite"><i class="fa-solid fa-heart" style="color: #ff6b97;"></i>お気に入り登録</div>
    </div>
  </div>






  <div></div>

  <div class="lets-favorite">＼気になったエージェントと話してみよう／</div>
  <div class="subscribe">一括登録する<i class="fa-solid fa-play"></i></div>

</main>
<!-- フッター -->
<?php include_once('components/footer.php') ?>
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous"></script>
  <script src="./assets/scripts/clientList/clientList.js"></script>
</body>

</html>