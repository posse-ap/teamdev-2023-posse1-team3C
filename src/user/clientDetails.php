<?php include('../dbconnect.php') ?>
<?php include('./assets/php/clientList/clientDetails.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRAFT 企業詳細ページ</title>
  <link rel="stylesheet" href="./assets/styles/normalize.css">
  <link rel="stylesheet" href="./assets/styles/common.css">
  <link rel="stylesheet" href="./assets/styles/clientDetails.css">
  <link rel="stylesheet" href="./assets/styles/clientList.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" defer></script>
  <script src="./assets/scripts/clientDetails/clientDetails.js" defer></script>
</head>

<body>
  <!-- ヘッダー -->
  <?php include_once('components/header.php') ?>

  <!-- メイン -->

  <!-- 名前と画像 -->
  <main>
    <div class="carrier-ticket">
      <?php echo $company_details["company"]; ?>
    </div>

    <div>
      <img src="./assets/img/heroes/<?php echo $company_details["company"] ?>/<?php echo $company_details["photo"] ?>" class="carrier-img" alt="carrier-img">
    </div>

    <!-- キャリアチケットの特徴 -->
    <div class="carrier-ticket-feature-background">
      <div class="carrier-ticket-feature">
        <?php echo $company_details["company"] ?>の特徴
      </div>
      <table class="feature-background">
        <tbody>
          <tr>
            <th>求人数</th>
            <td class="feature list-star-value" value="<?= $ratings['people'] ?>"></td>
          </tr>
          <tr>
            <th>サポート力</th>
            <td class="feature list-star-value" value="<?= $ratings['support'] ?>"></td>
          </tr>
          <tr>
            <th>内定獲得実績</th>
            <td class="feature list-star-value" value="<?= $ratings['achievement'] ?>"></td>
          </tr>
          <tr>
            <th>内定速度</th>
            <td class="feature list-star-value" value="<?= $ratings['speed'] ?>"></td>
          </tr>
          <tr>
            <th>扱っている業界の多さ</th>
            <td class="feature list-star-value" value="<?= $ratings['amount'] ?>"></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- 詳細情報 -->


    <div>
      <table class="all-detail-info">
        <tr>
          <th class="detail-info">詳細情報</th>
        </tr>
        <tr>
          <td class="each-info">問い合わせ形態</td>
          <td>
            <?php echo $company_details["formType"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">総合型 / 特化型</td>
          <td class="each-info">
            <?php echo $company_details["type"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">内定獲得実績</td>
          <td class="each-info">
            <?php echo $company_details["achievement"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">求人数</td>
          <td class="each-info">
            <?php echo $company_details["people"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">対応企業の規模</td>
          <td class="each-info">
            <?php echo $company_details["scale"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">業界研究</td>
          <td class="each-info">
            <?php echo $company_details["search"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">ES添削</td>
          <td class="each-info">
            <?php echo $company_details["ES"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">面接練習</td>
          <td class="each-info">
            <?php echo $company_details["practice"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">セミナー、企業説明会</td>
          <td class="each-info">
            <?php echo $company_details["seminar"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">就活community</td>
          <td class="each-info">
            <?php echo $company_details["community"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">サポート形態</td>
          <td class="each-info">
            <?php echo $company_details["supportType"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">対応エリア</td>
          <td class="each-info">
            <?php foreach ($areas as $area) {
              echo $area["area"] . " ";
            } ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">対応可能日時</td>
          <td class="each-info">
            <?php echo $company_details["Date"] ?>
          </td>
        </tr>
        <tr>
          <td class="each-info">企業名</td>
          <td class="each-info">
            <?php echo $company_details["company"] ?>
          </td>
        </tr>
      </table>
      </table>

    </div>

    <!-- キャリアチケットの説明 -->
    <div class="ticket-explain">
      <?php echo $company_details["description"] ?>
    </div>

    <!-- サクセスストーリー -->
    <div class="success-story-contents">
      <div class="success-story-title">
        <div class="success-story-title-text">
          <i class="fa-regular fa-tag"></i>
          <p>
          <?php echo $company_details["company"] ?>のサクセスストーリー
          </p>
        </div>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php foreach ($stories as $story) {?>
            <div class="swiper-slide">
            <div class="user-1-contents">
              <div class="user-1-img">
                <img src="./assets/img/stories/<?php echo $company_details["company"] ?>/<?php echo $story["photo"]?>" alt="">
                <div class="user-1-speed">
                  <?php echo $story["time"]?>で内定獲得！
                </div>
              </div>
              <div class="user-1-comment">
                <h4>
                  <?php echo $story["title"]?>
                </h4>
                <div class="user-1-info">
                  <div class="user-1-info-univ">
                    <?php echo $story["university"]?>
                  </div>
                  <div class="user-1-info-name">
                    <?php echo $story["name"]?>
                  </div>
                </div>
                <div class="user-1-comments">
                  <?php echo $story["story"]?>
                </div>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <!-- リンク -->

    <div class="access">
      <a href="./register.php">
        <button class="access-btn">
          <span class="access-btn-text">
            申し込みする
          </span>
          <i class="fa-solid fa-caret-right"></i>
        </button>
      </a>
    </div>
    <div class="official-site">
      <a href="">
        <button class="official-site-btn">
          <span class="official-site-btn-text">
            公式サイトへ
          </span>
          <i class="fa-solid fa-arrow-up-right-from-square"></i>
        </button>
      </a>
    </div>
  </main>


  <!-- フッター -->
  <?php include_once('components/footer.php') ?>
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous"></script>
  <script src="./assets/scripts/clientList/clientList.js"></script>
</body>

</html>