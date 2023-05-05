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
      <div class="carrier-ticket-feature">キャリアチケットの特徴</div>
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
            <?php echo $company_details["scale"]?>
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
          <td class="each-info"></td>
        </tr>
        <tr>
          <td class="each-info">対応可能日時</td>
          <td class="each-info"> 月,火,水,木,金,土,日<br>
            平日10時00分〜20時00分<br>
            土日11時00分〜18時00分</td>
        </tr>
        <tr>
          <td class="each-info">企業名</td>
          <td class="each-info">キャリアチケット株式会社</td>
        </tr>
      </table>
      </table>

    </div>

    <!-- キャリアチケットの説明 -->
    <div class="ticket-explain">キャリアチケットは、新卒の就活のための就活エージェントです。<br>
      何十社もの選考を受け続ける従来の就職活動とは違い、本当にマッチした平均5社の選考だけで就活生を内定に導いています。<br>
      週に何度かオンラインの就活イベントも開催中。そこで企業とマッチングして内定を獲得できる可能性もあります。<br>
      イベントでは、複数企業との交流ができるだけでなく、選考の練習ができたり、参加企業とのマッチングをお願いすることも。イベント後は一人ひとりの就活をリクルーターがサポートしてくれ、イベントでマッチングした企業以外にも希望にあった企業を紹介してくれます。<br>
      参加した方限定の特別選考ルートも用意されているため、はやめに就活を終えたい方におすすめです。
    </div>

    <!-- サクセスストーリー -->


    <div class="success-story-container">
      <div class="success-story-name
        ">🔑&emsp;キャリアチケットのサクセスストーリー</div>
      <div class="three-stories">
        <div class="other-story">◀︎</div>
        <div class="all-success-story">

          <div class="success-story-img-around">
            <img src="./assets/img/success-story.png" class="success-story-img" alt="success-story-img">
            <div class="achive">約２ヶ月で内定獲得！</div>
          </div>

          <div class="comment">アドバイザーさんのおかげで自信を持てました!</div>
          <div class="self-introduce">慶應義塾大学&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;上野侑紗</div>
          <div class="story-detail">
            地元の企業で内定をもらっていたけど、関東で働きたいという思いが強くなり、就活を続行。一方で内定をもらう友人も増えはじめ、焦りが生まれた際に、キャリアスタートへ相談し、親身に話を聞いてもらえて、もう一度就活に取り組む自信を持つことができたので、本当に良かったです。以前から人と関わることが得意だったので、その長所を生かして、株式会社ヒトノエの営業職にエントリーしたところ、社員の皆さんの人柄に惹かれ、入社を決意しました</div>

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
</body>

</html>