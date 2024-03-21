<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>babgu 企業詳細ページ</title>
  <link rel="stylesheet" href="./assets/styles/normalize.css">
  <link rel="stylesheet" href="./assets/styles/common.css">
  <!-- <link rel="stylesheet" href="../../dist/output.css"> -->
  <link rel="stylesheet" href="./assets/styles/record.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" defer></script>
</head>

<body>
  <?php include_once('components/header.php') ?>
  <?php include_once('components/menubar.php') ?>


  <main>

    <h2 class="top-favorite">履歴一覧</h2>
    <div id="favoritesList">
      <!-- お気に入り企業の情報がここに表示されます -->
    </div>


    <div class="lets-favorite">\ あなたがチェックした企業はこちら /</div>
    <div class="record-wrapper">
      <div id="service-alert" class="text-center flex justify-center"></div>
      <div class="service-wrapper" id='service-wrapper'></div>
    </div>

  </main>
  <!-- フッター -->
  <?php include_once('components/footer.php') ?>
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous"></script>
  <script src="./assets/scripts/record/record.js"></script>

</body>

</html>
