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
      <img src="./assets/img/キャリア.jpeg" class="carrier-img" alt="carrier-img">
    </div>

    <!-- キャリアチケットの特徴 -->
    <div class="carrier-ticket-feature-background">
      <div class="carrier-ticket-feature">
        <?php echo $company_details["company"] ?>の特徴
      </div>
      <ul class="feature-background">
        <div class="features">
          <li class="feature">求人数：</li>
          <li class="feature">サポート力：</li>
          <li class="feature">内定獲得実績：</li>
          <li class="feature">内定速度：</li>
          <li class="feature">扱っている業界の多さ：</li>
      </ul>
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
          <div class="swiper-slide">
            <div class="user-1-contents">
              <div class="user-1-img">
                <img src="./assets/img/S__354672649.jpg" alt="">
                <div class="user-1-speed">
                  <?php echo $stories["time"]?>で内定獲得！
                </div>
              </div>
              <div class="user-1-comment">
                <h4>
                アドバイザーさんのおかげで自信を持てました!
                </h4>
                <div class="user-1-info">
                  <div class="user-1-info-univ">
                    慶應義塾大学
                  </div>
                  <div class="user-1-info-name">
                    上野侑紗さん
                  </div>
                </div>
                <div class="user-1-comments">
                地元の企業で内定をもらっていたけど、関東で働きたいという思いが強くなり、就活を続行。一方で内定をもらう友人も増えはじめ、焦りが生まれた際に、キャリアスタートへ相談し、親身に話を聞いてもらえて、もう一度就活に取り組む自信を持つことができたので、本当に良かったです。以前から人と関わることが得意だったので、その長所を生かして、株式会社testの営業職にエントリーしたところ、社員の皆さんの人柄に惹かれ、入社を決意しました
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="user-2-contents">
              <div class="user-2-img">
                <img src="./assets/img/S__354672649.jpg" alt="">
                <div class="user-2-speed">
                  <?php echo $stories["time"]?>で内定獲得！
                </div>
              </div>
              <div class="user-2-comment">
                <h4>
                アドバイザーさんのおかげで自信を持てました!
                </h4>
                <div class="user-2-info">
                  <div class="user-2-info-univ">
                    慶應義塾大学
                  </div>
                  <div class="user-2-info-name">
                    上野侑紗さん
                  </div>
                </div>
                <div class="user-2-comments">
                地元の企業で内定をもらっていたけど、関東で働きたいという思いが強くなり、就活を続行。一方で内定をもらう友人も増えはじめ、焦りが生まれた際に、キャリアスタートへ相談し、親身に話を聞いてもらえて、もう一度就活に取り組む自信を持つことができたので、本当に良かったです。以前から人と関わることが得意だったので、その長所を生かして、株式会社testの営業職にエントリーしたところ、社員の皆さんの人柄に惹かれ、入社を決意しました
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="user-3-contents">
              <div class="user-3-img">
                <img src="./assets/img/S__354672649.jpg" alt="">
                <div class="user-3-speed">
                  <?php echo $stories["time"]?>で内定獲得！
                </div>
              </div>
              <div class="user-3-comment">
                <h4>
                アドバイザーさんのおかげで自信を持てました!
                </h4>
                <div class="user-3-info">
                  <div class="user-3-info-univ">
                    慶應義塾大学
                  </div>
                  <div class="user-3-info-name">
                    上野侑紗さん
                  </div>
                </div>
                <div class="user-3-comments">
                地元の企業で内定をもらっていたけど、関東で働きたいという思いが強くなり、就活を続行。一方で内定をもらう友人も増えはじめ、焦りが生まれた際に、キャリアスタートへ相談し、親身に話を聞いてもらえて、もう一度就活に取り組む自信を持つことができたので、本当に良かったです。以前から人と関わることが得意だったので、その長所を生かして、株式会社testの営業職にエントリーしたところ、社員の皆さんの人柄に惹かれ、入社を決意しました
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
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
</body>

</html>