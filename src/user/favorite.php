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
  <div class="top-favorite">お気に入り一覧</div>


  <div class="lets-favorite">現在のあなたのお気に入り一覧はこちら<br><br>チェックをつけて一括登録しよう！</div>



  <div class="service-box">
    <div class="container">
      <label>
        <input type="checkbox" class="checkbox">
        <span class="checkbox-fontas"></span>
      </label>
      <div class="service-name">サービスA</div>
      <div class="browsing-history">最終閲覧履歴2023/02/21</div>
    </div>
    <div class="button-container">
      <div class="official-page">公式ページ&nbsp;□</div>
      <div class="detail-page">詳細ページ&nbsp;></div>
      <div class="subscribe-favorite">♡&nbsp;お気に入り登録</div>
    </div>
  </div>


  <div class="service-box">
    <div class="container">
      <div class="checkbox">□</div>
      <div class="service-name">サービスF</div>
      <div class="browsing-history">最終閲覧履歴2023/02/21</div>
    </div>
    <div class="button-container">
      <div class="official-page">公式ページ&nbsp;□</div>
      <div class="detail-page">詳細ページ&nbsp;></div>
      <div class="subscribe-favorite">♡&nbsp;お気に入り登録</div>
    </div>
  </div>


  <div class="service-box">
    <div class="container">
      <div class="checkbox">□</div>
      <div class="service-name">サービスD</div>
      <div class="browsing-history">最終閲覧履歴2023/02/21</div>
    </div>
    <div class="button-container">
      <div class="official-page">公式ページ&nbsp;□</div>
      <div class="detail-page">詳細ページ&nbsp;></div>
      <div class="subscribe-favorite">♡&nbsp;お気に入り登録</div>
    </div>
  </div>


  <div class="service-box">
    <div class="container">
      <div class="checkbox">□</div>
      <div class="service-name">サービスC</div>
      <div class="browsing-history">最終閲覧履歴2023/02/21</div>
    </div>
    <div class="button-container">
      <div class="official-page">公式ページ&nbsp;□</div>
      <div class="detail-page">詳細ページ&nbsp;></div>
      <div class="subscribe-favorite">♡&nbsp;お気に入り登録</div>
    </div>
  </div>


  <div class="service-box">
    <div class="container">
      <div class="checkbox">□</div>
      <div class="service-name">サービスE</div>
      <div class="browsing-history">最終閲覧履歴2023/02/21</div>
    </div>
    <div class="button-container">
      <div class="official-page">公式ページ&nbsp;□</div>
      <div class="detail-page">詳細ページ&nbsp;></div>
      <div class="subscribe-favorite">♡&nbsp;お気に入り登録</div>
    </div>
  </div>


  <div class="service-box">
    <div class="container">
      <div class="checkbox">□</div>
      <i class="fa-solid fa-circle-check"></i>
      <div class="service-name">サービスB</div>
      <div class="browsing-history">最終閲覧履歴2023/02/21</div>
    </div>
    <div class="button-container">
      <div class="official-page">公式ページ&nbsp;□</div>
      <div class="detail-page">詳細ページ&nbsp;></div>
      <div class="subscribe-favorite">♡&nbsp;お気に入り登録</div>
    </div>
  </div>



  <ul class="pagination">
<li><a class="prev" href="#">前へ</a></li>
<li><span aria-current="page">1</span></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a class="next" href="#">次へ</a></li>
</ul>


  <div></div>

  <div class="lets-favorite">＼気になったエージェントと話してみよう／</div>
  <div class="subscribe">一括登録する&nbsp;▶︎</div>

</main>
<!-- フッター -->
<?php include_once('components/footer.php') ?>
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous"></script>
  <script src="./assets/scripts/clientList/clientList.js"></script>
</body>

</html>