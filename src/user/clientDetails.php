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


    <div class="success-story-container">
      <div class="success-story-name
        ">🔑&emsp;<?php echo $company_details["company"] ?>のサクセスストーリー</div>
      <div class="three-stories">
        <div class="other-story">◀︎</div>
        <div class="all-success-story">

          <div class="success-story-img-around">
            <img src="./assets/img/success-story.png" class="success-story-img" alt="success-story-img">
            <div class="achive">
              <?php echo $stories["time"] ?>で内定獲得！
            </div>
          </div>

          <div class="comment">
            <?php echo $stories["title"] ?>
          </div>
          <div class="self-introduce"><?php echo $stories["university"] ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $stories["name"] ?></div>
          <div class="story-detail">
            <?php echo $stories["story"] ?>
          </div>

        </div>
        <div class="other-story">▶︎</div>
      </div>

    </div>

    <!-- リンク -->

    <div class="access">お問い合わせする&emsp;▶︎
    </div>
    <div class="official-site">
      公式サイトへ ◉
    </div>
  </main>


  <!-- フッター -->
  <?php include_once('components/footer.php') ?>
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous"></script>
  <script src="./assets/scripts/clientList/clientList.js"></script>
</body>

</html>