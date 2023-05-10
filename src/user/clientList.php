<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRAFT 企業一覧ページ</title>
  <link rel="stylesheet" href="./assets/styles/normalize.css">
  <link rel="stylesheet" href="./assets/styles/common.css">
  <link rel="stylesheet" href="./assets/styles/clientList.css">

</head>
<body>
  <!-- ヘッダー読み込み -->
  <?php include_once('components/header.php')?>

  <main>
    <!-- データ持ってくるphpの読み込み -->
  <?php include_once('assets/php/clientList/clientList.php')?>
  <!-- ヒーロー -->
  <div class="cl-mainvisual">
    <div class="cl-mainvisual-contents">
        <div class="title">
          <i class="fa-solid fa-magnifying-glass"></i>
          <h3 class="cl-h3">あなたにぴったりのエージェントを探す</h3>
        </div>
        <p class="cl-p">自分に合った企業を探してみよう！</p>
        <p class="cl-p">ポイントや評価を見て気になったら詳細ページに飛んでみよう</p>
    </div>
  </div>
  <!-- 絞りこみ -->
  
  <!-- 一覧 -->
  <h2>エージェント一覧</h2>
  <div class="clientlist-wrapper">
    <!-- 企業ごとに情報出力 -->
    <?php foreach ($companies as $company){ ?>
      <?php $company_id = $company['id']; ?>
      <div class="clientlist">
        <h3 class="clientlist-name"><?= $company['company'] ?></h3>
        <div class="clientlist-contents">
            <div class="clientlist-main">
              <!-- 画像登録してどういう名前で登録されるかわからなかったので修正必要 -->
              <div class="list-img" style="background-image: url(../user/assets/img/heroes/<?php echo $company["company"]?>/<?php echo $company["photo"]?>);">
              </div>
              <!-- 星の生成 -->
              <div class="list-star">
                <table class="list-star-table">
                  <tr>
                    <th>求人数</th>
                    <td class="list-star-value" value="<?= $company['people'] ?>"></td>
                  </tr>
                  <tr>
                    <th>サポート力</th>
                    <td class="list-star-value" value="<?= $company['support'] ?>"></td>
                  </tr>
                  <tr>
                    <th>内定獲得実績</th>
                    <td class="list-star-value" value="<?= $company['achievement'] ?>"> </td>
                  </tr>
                  <tr>
                    <th>内定速度</th>
                    <td class="list-star-value" value='<?= $company['speed'] ?>'></td>
                  </tr>
                  <tr>
                    <th>取り扱い業界</th>
                    <td class="list-star-value" value="<?= $company['amount'] ?>"></td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- 推しポイントのデータ取得 -->
            <?php include('assets/php/clientList/clientlist-point.php') ?>
            <div class="clientlist-sub">
              <div class="list-sub-point">
                <h4 class="list-sub-point-h3">ポイント</h4>
                <ul>
                  <!-- それぞれ個数が違うためforeachで出力 -->
                  <?php foreach ($points_data as $goodpoint){ ?>
                    <li><?= $goodpoint['GoodPoint'] ?></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="link-button">
                <!-- データベースのURLが正しくないから飛べないけど正しければ飛べるはず -->
                <a href="<?= $company['URL']?>">
                  <div class="button official-link">
                    <p class="button-p">公式サイト</p>
                    <i class="fa-solid fa-arrow-up-right-from-square button-i"></i>
                  </div>
                </a>
                <!-- 詳細に飛ぶ -->
                <a href="clientDetails.php?id=<?= $company_id ?>">
                  <div class="button detail-page">
                    <p class="button-p">詳細ページ</p>
                    <i class="fa-solid fa-caret-right button-i"></i>
                  </div>
                </a>
              </div>
            </div>
      </div>
      </div>

    <?php } ?>

  
    </div>

  </h3>
  </main>
  <!-- フッター -->
  <?php include_once('components/footer.php')?>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous"></script>
  <script src="./assets/scripts/clientList/clientList.js"></script>

</body>
</html>