<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRAFT 企業一覧ページ</title>
  <link rel="stylesheet" href="./assets/styles/normalize.css">
  <link rel="stylesheet" href="./assets/styles/common.css">
  <link rel="stylesheet" href="../dist/output.css">
  <link rel="stylesheet" href="./assets/styles/clientList.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" defer></script>
  <script src="./assets/scripts/clientList/clientList.js" defer></script>

</head>
<body>
  <!-- ヘッダー読み込み -->
  <?php include_once('components/header.php')?>
  <?php include_once('components/menubar.php')?>
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
              <input type="checkbox" name="graduate[]" id="g-box-item-1"
              class="checkbox" value="1" type-data="s-graduated">
              <span class="checkbox-fontas"></span>
              25卒
            </label>
          </li>
          <li class="g-box-item">
            <label for="g-box-item-2">
              <input type="checkbox" name="graduate[]" id="g-box-item-2" class="checkbox" value="2" type-data="s-graduated">
              <span class="checkbox-fontas"></span>
              26卒
            </label>
          </li>
          <li class="g-box-item">
            <label for="g-box-item-3">
              <input type="checkbox" name="graduate[]" id="g-box-item-3" class="checkbox" value="3" type-data="s-graduated">
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
              <input type="checkbox" name="support[]" id="s-box-item-1" class="checkbox" value="4" type-data="s-support">
              <span class="checkbox-fontas"></span>
              オンラインのみ
            </label>
          </li>
          <li class="s-box-item">
            <label for="s-box-item-2">
              <input type="checkbox" name="support[]" id="s-box-item-2" class="checkbox" value="5" type-data="s-support">
              <span class="checkbox-fontas"></span>
              対面のみ
            </label>
          </li>
          <li class="s-box-item">
            <label for="s-box-item-3">
              <input type="checkbox" name="support[]" id="s-box-item-3" class="checkbox" value="6" type-data="s-support">
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
              <input type="checkbox" name="your-area[]" id="y-box-item-1" class="checkbox" value="7" type-data="s-area">
              <span class="checkbox-fontas"></span>
              北海道
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-2">
              <input type="checkbox" name="your-area[]" id="y-box-item-2" class="checkbox" value="8">
              <span class="checkbox-fontas" type-data="s-area"></span>
              東北
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-3">
              <input type="checkbox" name="your-area[]" id="y-box-item-3" class="checkbox" value="9" type-data="s-area">
              <span class="checkbox-fontas" ></span>
              関東
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-4">
              <input type="checkbox" name="your-area[]" id="y-box-item-4" class="checkbox" value="10" type-data="s-area">
              <span class="checkbox-fontas"></span>
              中部
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-5">
              <input type="checkbox" name="your-area[]" id="y-box-item-5" class="checkbox" value="11" type-data="s-area">
              <span class="checkbox-fontas"></span>
              近畿
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-6">
              <input type="checkbox" name="your-area[]" id="y-box-item-6" class="checkbox" value="12" type-data="s-area">
              <span class="checkbox-fontas"></span>
              中国
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-7">
              <input type="checkbox" name="your-area[]" id="y-box-item-7" class="checkbox" value="13" type-data="s-area">
              <span class="checkbox-fontas"></span>
              四国
            </label>
          </li>
          <li class="y-box-item">
            <label for="y-box-item-8">
              <input type="checkbox" name="your-area[]" id="y-box-item-8" class="checkbox" value="14" type-data="s-area">
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
    <div class="search-details-contents">
      <div class="agent-type">
        <div class="agent-type-comprehensive">
          <h5>総合型</h5>
          <div class="agent-type-comprehensive-content">
              <label for="agent-type-1">
              <input type="checkbox" name="agent-type[]" id="agent-type-1"
              class="checkbox" value="15">
              <span class="checkbox-fontas"></span>
              総合型
            </label>
          </div>
        </div>
        <h5 class="agent-type-title">特化型</h5>
        <div class="agent-type-wrapper">
          <ul class="a-box">
            <li class="a-box-item">
              <label for="agent-type-2">
                <input type="checkbox" name="agent-type[]" id="agent-type-2"
                class="checkbox" value="16">
                <span class="checkbox-fontas"></span>
                営業
              </label>
            </li>
            <li class="a-box-item">
              <label for="agent-type-3">
                <input type="checkbox" name="agent-type[]" id="agent-type-3"
                class="checkbox" value="17">
                <span class="checkbox-fontas"></span>
                事務/アシスタント
              </label>
            </li>
            <li class="a-box-item">
              <label for="agent-type-4">
                <input type="checkbox" name="agent-type[]" id="agent-type-4"
                class="checkbox" value="18">
                <span class="checkbox-fontas"></span>
                企画/マーケティング
              </label>
            </li>
            <li class="a-box-item">
              <label for="agent-type-5">
                <input type="checkbox" name="agent-type[]" id="agent-type-5"
                class="checkbox" value="19">
                <span class="checkbox-fontas"></span>
                販売/サービス
              </label>
            </li>
            <li class="a-box-item">
              <label for="agent-type-6">
                <input type="checkbox" name="agent-type[]" id="agent-type-6"
                class="checkbox" value="20">
                <span class="checkbox-fontas"></span>
                IT/通信系エンジニア
              </label>
            </li>
            <li class="a-box-item">
              <label for="agent-type-7">
                <input type="checkbox" name="agent-type[]" id="agent-type-7"
                class="checkbox" value="21">
                <span class="checkbox-fontas"></span>
                建築/土木系エンジニア
              </label>
            </li>
            <li class="a-box-item">
              <label for="agent-type-8">
                <input type="checkbox" name="agent-type[]" id="agent-type-8"
                class="checkbox" value="22">
                <span class="checkbox-fontas"></span>
                モノづくり系エンジニア
              </label>
            </li>
            <li class="a-box-item">
              <label for="agent-type-9">
                <input type="checkbox" name="agent-type[]" id="agent-type-9"
                class="checkbox" value="23">
                <span class="checkbox-fontas"></span>
                素材/化学/食品系エンジニア
              </label>
            </li>
            <li class="a-box-item">
              <label for="agent-type-10">
                <input type="checkbox" name="agent-type[]" id="agent-type-10"
                class="checkbox" value="24">
                <span class="checkbox-fontas"></span>
                医療系専門職
              </label>
            </li>
            <li class="a-box-item">
              <label for="agent-type-11">
                <input type="checkbox" name="agent-type[]" id="agent-type-11"
                class="checkbox" value="25">
                <span class="checkbox-fontas"></span>
                金融系専門職
              </label>
            </li>
            <li class="a-box-item">
              <label for="agent-type-12">
                <input type="checkbox" name="agent-type[]" id="agent-type-12"
                class="checkbox" value="26">
                <span class="checkbox-fontas"></span>
                コンサルタント/不動産専門職
              </label>
            </li>
            <li class="a-box-item">
              <label for="agent-type-13">
                <input type="checkbox" name="agent-type[]" id="agent-type-13"
                class="checkbox" value="27">
                <span class="checkbox-fontas"></span>
                クリエイティブ
              </label>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- 一覧 -->
  <h2>エージェント一覧</h2>
  <div class="clientlist-wrapper" id='client-list'>
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
                <h4 class="list-sub-point-title">ポイント</h4>
                <ul>
                  <!-- それぞれ個数が違うためforeachで出力 -->
                  <?php foreach ($points_data as $goodpoint){ ?>
                    <li><?= $goodpoint['GoodPoint'] ?></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="link-button">
                <!-- データベースのURLが正しくないから飛べないけど正しければ飛べるはず -->
                <a href="./register.php?company_id=<?php echo $company_id?>">
                  <div class="button official-link">
                    <p class="button-p">申し込みする</p>
                    <i class="fa-solid fa-caret-right button-i"></i>
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
  <script src="./assets/scripts/clientList/clientList-search.js" ></script>
</body>
</html>