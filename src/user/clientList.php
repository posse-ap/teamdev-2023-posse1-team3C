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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" defer></script>
  <script src="./assets/scripts/clientList/clientList.js" defer></script>
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
  <div class="search">
    <div class="search-title">
      <i class="fa-regular fa-tag"></i>
      <h3>基本情報</h3>
    </div>
    <div class="graduate">
      <h4>卒業年度</h4>
      <div class="graduate-wrapper">
        <ul class="g-box">
          <li class="g-box-item">
            <label for="g-box-item-1">
            <input type="checkbox" name="graduate" id="g-box-item-1"
            class="checkbox" value="25卒">
            <span class="checkbox-fontas"></span>
              25卒
            </label>
          </li>
          <li class="g-box-item">
            <label for="g-box-item-2">
              <input type="checkbox" name="graduate" id="g-box-item-2" class="checkbox" value="26卒">
              <span class="checkbox-fontas"></span>
              26卒
            </label>
          </li>
          <li class="g-box-item">
            <label for="g-box-item-3">
              <input type="checkbox" name="graduate" id="g-box-item-3" class="checkbox" value="27卒">
              <span class="checkbox-fontas"></span>
              27卒
            </label>
          </li>
        </ul>
      </div>
    </div>
    <div class="support">
      <h4>サポート形態</h4>
      <div class="support-wrapper">
        <ul class="s-box">
          <li class="s-box-item">
            <label for="s-box-item-1">
              <input type="checkbox" name="support" id="s-box-item-1" class="checkbox" value="オンラインのみ">
              <span class="checkbox-fontas"></span>
              オンラインのみ
            </label>
          </li>
          <li class="s-box-item">
            <label for="s-box-item-2">
              <input type="checkbox" name="support" id="s-box-item-2" class="checkbox" value="対面のみ">
              <span class="checkbox-fontas"></span>
              対面のみ
            </label>
          </li>
          <li class="s-box-item">
            <label for="s-box-item-3">
              <input type="checkbox" name="support" id="s-box-item-3" class="checkbox" value="両方可">
              <span class="checkbox-fontas"></span>
              両方可
            </label>
        </ul>
      </div>
    </div>
    <div class="your-area">
      <h4>お住まいの地域</h4>
      <div class="your-area-wrapper">
        <ul class="y-box">
          <li class="y-box-item">
            <label for="y-box-item-1">
              <input type="checkbox" name="your-area" id="y-box-item-1" class="checkbox" value="北海道">
              <span class="checkbox-fontas"></span>
              北海道
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-2">
              <input type="checkbox" name="your-area" id="y-box-item-2" class="checkbox" value="東北">
              <span class="checkbox-fontas"></span>
              東北
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-3">
              <input type="checkbox" name="your-area" id="y-box-item-3" class="checkbox" value="関東">
              <span class="checkbox-fontas"></span>
              関東
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-4">
              <input type="checkbox" name="your-area" id="y-box-item-4" class="checkbox" value="中部">
              <span class="checkbox-fontas"></span>
              中部
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-5">
              <input type="checkbox" name="your-area" id="y-box-item-5" class="checkbox" value="近畿">
              <span class="checkbox-fontas"></span>
              近畿
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-6">
              <input type="checkbox" name="your-area" id="y-box-item-6" class="checkbox" value="中国">
              <span class="checkbox-fontas"></span>
              中国
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-7">
              <input type="checkbox" name="your-area" id="y-box-item-7" class="checkbox" value="四国">
              <span class="checkbox-fontas"></span>
              四国
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-8">
              <input type="checkbox" name="your-area" id="y-box-item-8" class="checkbox" value="九州">
              <span class="checkbox-fontas"></span>
              九州
            </label>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- 詳細絞りこみ -->
  <div class="search-details">
    <div class="search-details-title">
      <p class="search-details-title-content">
        詳細絞りこみはコチラ
      </p>
      <i class="fa-solid fa-caret-down"></i>
    </div>
  </div>
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