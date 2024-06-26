<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>babgu 企業一覧ページ</title>
  <link rel="stylesheet" href="./assets/styles/normalize.css">
  <link rel="stylesheet" href="./assets/styles/common.css">
  <link rel="stylesheet" href="../dist/output.css">
  <link rel="stylesheet" href="./assets/styles/clientList.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous" defer></script>
  <script src="./assets/scripts/clientList/clientList.js" defer></script>
  <?php
  // include_once('assets/php/clientList/searchClientFromIndex.php');
  ?>
</head>

<body>
  <!-- ヘッダー読み込み -->
  <?php include_once('components/header.php') ?>
  <?php include_once('components/menubar.php') ?>
  <main>
    <!-- データ持ってくるphpの読み込み -->
    <?php include_once('assets/php/clientList/clientList.php') ?>
    <!-- ヒーロー -->
    <div class="cl-mainvisual">
      <div class="cl-mainvisual-contents">
        <div class="title">
          <i class="fa-solid fa-magnifying-glass"></i>
          <h3 class="cl-h3">あなたにぴったりの*****を探す</h3>
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
                <input type="checkbox" name="graduate" id="g-box-item-1" class="checkbox" value="1" type-data="s-graduated">
                <span class="checkbox-fontas checkbox-fontas-1"></span>
                25卒
              </label>
            </li>
            <li class="g-box-item">
              <label for="g-box-item-2">
                <input type="checkbox" name="graduate" id="g-box-item-2" class="checkbox" value="2" type-data="s-graduated">
                <span class="checkbox-fontas checkbox-fontas-2"></span>
                26卒
              </label>
            </li>
            <li class="g-box-item">
              <label for="g-box-item-3">
                <input type="checkbox" name="graduate" id="g-box-item-3" class="checkbox" value="3" type-data="s-graduated">
                <span class="checkbox-fontas checkbox-fontas-3"></span>
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
                <input type="checkbox" name="support" id="s-box-item-1" class="checkbox" value="4" type-data="s-support">
                <span class="checkbox-fontas checkbox-fontas-4"></span>
                オンラインのみ
              </label>
            </li>
            <li class="s-box-item">
              <label for="s-box-item-2">
                <input type="checkbox" name="support" id="s-box-item-2" class="checkbox" value="5" type-data="s-support">
                <span class="checkbox-fontas checkbox-fontas-5"></span>
                対面のみ
              </label>
            </li>
            <li class="s-box-item">
              <label for="s-box-item-3">
                <input type="checkbox" name="support" id="s-box-item-3" class="checkbox" value="6" type-data="s-support">
                <span class="checkbox-fontas checkbox-fontas-6"></span>
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
                <input type="checkbox" name="your-area" id="y-box-item-1" class="checkbox" value="7" type-data="s-area">
                <span class="checkbox-fontas checkbox-fontas-7"></span>
                北海道
              </label>
            </li>
            <li class="y-box-item">
              <label for="y-box-item-2">
                <input type="checkbox" name="your-area" id="y-box-item-2" class="checkbox" value="8">
                <span class="checkbox-fontas checkbox-fontas-8"></span>
                東北
              </label>
            </li>
            <li class="y-box-item">
              <label for="y-box-item-3">
                <input type="checkbox" name="your-area" id="y-box-item-3" class="checkbox" value="9" type-data="s-area">
                <span class="checkbox-fontas checkbox-fontas-9"></span>
                関東
              </label>
            </li>
            <li class="y-box-item">
              <label for="y-box-item-4">
                <input type="checkbox" name="your-area" id="y-box-item-4" class="checkbox" value="10" type-data="s-area">
                <span class="checkbox-fontas checkbox-fontas-10"></span>
                中部
              </label>
            </li>
            <li class="y-box-item">
              <label for="y-box-item-5">
                <input type="checkbox" name="your-area" id="y-box-item-5" class="checkbox" value="11" type-data="s-area">
                <span class="checkbox-fontas checkbox-fontas-11"></span>
                近畿
              </label>
            </li>
            <li class="y-box-item">
              <label for="y-box-item-6">
                <input type="checkbox" name="your-area" id="y-box-item-6" class="checkbox" value="12" type-data="s-area">
                <span class="checkbox-fontas checkbox-fontas-12"></span>
                中国
              </label>
            </li>
            <li class="y-box-item">
              <label for="y-box-item-7">
                <input type="checkbox" name="your-area" id="y-box-item-7" class="checkbox" value="13" type-data="s-area">
                <span class="checkbox-fontas checkbox-fontas-13"></span>
                四国
              </label>
            </li>
            <li class="y-box-item">
              <label for="y-box-item-8">
                <input type="checkbox" name="your-area" id="y-box-item-8" class="checkbox" value="14" type-data="s-area">
                <span class="checkbox-fontas checkbox-fontas-14"></span>
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
                <input type="checkbox" name="agent-type[]" id="agent-type-1" class="checkbox" value="15">
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
                  <input type="checkbox" name="agent-type[]" id="agent-type-2" class="checkbox" value="16">
                  <span class="checkbox-fontas"></span>
                  営業
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-3">
                  <input type="checkbox" name="agent-type[]" id="agent-type-3" class="checkbox" value="17">
                  <span class="checkbox-fontas"></span>
                  事務/アシスタント
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-4">
                  <input type="checkbox" name="agent-type[]" id="agent-type-4" class="checkbox" value="18">
                  <span class="checkbox-fontas"></span>
                  企画/マーケティング
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-5">
                  <input type="checkbox" name="agent-type[]" id="agent-type-5" class="checkbox" value="19">
                  <span class="checkbox-fontas"></span>
                  販売/サービス
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-6">
                  <input type="checkbox" name="agent-type[]" id="agent-type-6" class="checkbox" value="20">
                  <span class="checkbox-fontas"></span>
                  IT/通信系エンジニア
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-7">
                  <input type="checkbox" name="agent-type[]" id="agent-type-7" class="checkbox" value="21">
                  <span class="checkbox-fontas"></span>
                  建築/土木系エンジニア
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-8">
                  <input type="checkbox" name="agent-type[]" id="agent-type-8" class="checkbox" value="22">
                  <span class="checkbox-fontas"></span>
                  モノづくり系エンジニア
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-9">
                  <input type="checkbox" name="agent-type[]" id="agent-type-9" class="checkbox" value="23">
                  <span class="checkbox-fontas"></span>
                  素材/化学/食品系エンジニア
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-10">
                  <input type="checkbox" name="agent-type[]" id="agent-type-10" class="checkbox" value="24">
                  <span class="checkbox-fontas"></span>
                  医療系専門職
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-11">
                  <input type="checkbox" name="agent-type[]" id="agent-type-11" class="checkbox" value="25">
                  <span class="checkbox-fontas"></span>
                  金融系専門職
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-12">
                  <input type="checkbox" name="agent-type[]" id="agent-type-12" class="checkbox" value="26">
                  <span class="checkbox-fontas"></span>
                  コンサルタント/不動産専門職
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-13">
                  <input type="checkbox" name="agent-type[]" id="agent-type-13" class="checkbox" value="27">
                  <span class="checkbox-fontas"></span>
                  クリエイティブ
                </label>
              </li>
            </ul>
          </div>
          <h5 class="agent-type-title">対応可能日時</h5>
          <div class="agent-type-wrapper">
            <ul class="a-box">
              <li class="a-box-item">
                <label for="agent-type-14">
                  <input type="checkbox" name="agent-type[]" id="agent-type-14" class="checkbox" value="28">
                  <span class="checkbox-fontas"></span>
                  土・日・祝日対応可
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-15">
                  <input type="checkbox" name="agent-type[]" id="agent-type-15" class="checkbox" value="29">
                  <span class="checkbox-fontas"></span>
                  平日18時まで対応可
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-16">
                  <input type="checkbox" name="agent-type[]" id="agent-type-16" class="checkbox" value="30">
                  <span class="checkbox-fontas"></span>
                  平日22時まで対応可
                </label>
              </li>
            </ul>
          </div>
          <h5 class="agent-type-title">企業規模</h5>
          <div class="agent-type-wrapper">
            <ul class="a-box">
              <li class="a-box-item">
                <label for="agent-type-17">
                  <input type="checkbox" name="agent-type[]" id="agent-type-17" class="checkbox" value="31">
                  <span class="checkbox-fontas"></span>
                  ベンチャー
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-18">
                  <input type="checkbox" name="agent-type[]" id="agent-type-18" class="checkbox" value="32">
                  <span class="checkbox-fontas"></span>
                  大手
                </label>
              </li>
            </ul>
          </div>
          <h5 class="agent-type-title">文系・理系</h5>
          <div class="agent-type-wrapper">
            <ul class="a-box">
              <li class="a-box-item">
                <label for="agent-type-19">
                  <input type="checkbox" name="agent-type[]" id="agent-type-19" class="checkbox" value="33">
                  <span class="checkbox-fontas"></span>
                  文系
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-20">
                  <input type="checkbox" name="agent-type[]" id="agent-type-20" class="checkbox" value="34">
                  <span class="checkbox-fontas"></span>
                  理系
                </label>
              </li>
            </ul>
          </div>
          <h5 class="agent-type-title">特徴</h5>
          <div class="agent-type-wrapper">
            <ul class="a-box">
              <li class="a-box-item">
                <label for="agent-type-21">
                  <input type="checkbox" name="agent-type[]" id="agent-type-21" class="checkbox" value="35">
                  <span class="checkbox-fontas"></span>
                  就活コミュニティあり
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-22">
                  <input type="checkbox" name="agent-type[]" id="agent-type-22" class="checkbox" value="36">
                  <span class="checkbox-fontas"></span>
                  業界研究あり
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-23">
                  <input type="checkbox" name="agent-type[]" id="agent-type-23" class="checkbox" value="37">
                  <span class="checkbox-fontas"></span>
                  インターンシップ紹介あり
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-24">
                  <input type="checkbox" name="agent-type[]" id="agent-type-24" class="checkbox" value="38">
                  <span class="checkbox-fontas"></span>
                  説明会あり
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-25">
                  <input type="checkbox" name="agent-type[]" id="agent-type-25" class="checkbox" value="39">
                  <span class="checkbox-fontas"></span>
                  面接練習あり
                </label>
              </li>
              <li class="a-box-item">
                <label for="agent-type-26">
                  <input type="checkbox" name="agent-type[]" id="agent-type-26" class="checkbox" value="40">
                  <span class="checkbox-fontas"></span>
                  ES添削あり
                </label>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- 一覧 -->
    <h2>*****一覧</h2>

    <form action="./register.php" method="POST">
      <div class="clientlist-wrapper" id='client-list'>
        <!-- 企業ごとに情報出力 -->
      </div>

      <div class="btn-wrapper">
        <button class="subscribe" type="submit" name="submitButton" id="submit-button">
          まとめて申し込み
          <i class="fa-solid fa-caret-right apply"></i>
        </button>
      </div>
    </form>
  </main>
  <!-- フッター -->
  <?php include_once('components/footer.php') ?>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="./assets/scripts/clientList/clientList-search.js"></script>
  <script src="./assets/scripts/clientList/client-register.js"></script>
</body>

</html>
