<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRAFT トップページ</title>
  <link rel="stylesheet" href="./assets/styles/normalize.css">
  <link rel="stylesheet" href="./assets/styles/common.css">
  <link rel="stylesheet" href="./assets/styles/top.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" defer></script>
  <script src="./assets/scripts/index.js" defer></script>
</head>

<body>
  <!-- ヘッダー -->
  <?php include_once('components/header.php') ?>
  <?php include_once('components/menubar.php') ?>
  <main>
    <!-- ヒーロー -->
    <div class="toppage-hero">
      <div class="toppage-hero-comment">
        <h2>
          あなたにあった就活エージェント
          <br>
          選びを。まずは企業と話してみよう。
        </h2>
      </div>
    </div>
    <form action="./clientList.php" method="get">
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
                  <span class="checkbox-fontas"></span>
                  25卒
                </label>
              </li>
              <li class="g-box-item">
                <label for="g-box-item-2">
                  <input type="checkbox" name="graduate" id="g-box-item-2" class="checkbox" value="2" type-data="s-graduated">
                  <span class="checkbox-fontas"></span>
                  26卒
                </label>
              </li>
              <li class="g-box-item">
                <label for="g-box-item-3">
                  <input type="checkbox" name="graduate" id="g-box-item-3" class="checkbox" value="3" type-data="s-graduated">
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
                  <input type="checkbox" name="support" id="s-box-item-1" class="checkbox" value="4" type-data="s-support">
                  <span class="checkbox-fontas"></span>
                  オンラインのみ
                </label>
              </li>
              <li class="s-box-item">
                <label for="s-box-item-2">
                  <input type="checkbox" name="support" id="s-box-item-2" class="checkbox" value="5" type-data="s-support">
                  <span class="checkbox-fontas"></span>
                  対面のみ
                </label>
              </li>
              <li class="s-box-item">
                <label for="s-box-item-3">
                  <input type="checkbox" name="support" id="s-box-item-3" class="checkbox" value="6" type-data="s-support">
                  <span class="checkbox-fontas"></span>
                  両方可
                </label>
              </li>
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
                  <span class="checkbox-fontas"></span>

                  北海道
                </label>
              </li>
              <li class="y-box-item">
                <label for="y-box-item-2">
                  <input type="checkbox" name="your-area" id="y-box-item-2" class="checkbox" value="8" type-data="s-area">
                  <span class="checkbox-fontas"></span>
                  東北
                </label>
              </li>
              <li class="y-box-item">
                <label for="y-box-item-3">
                  <input type="checkbox" name="your-area" id="y-box-item-3" class="checkbox" value="9" type-data="s-area">
                  <span class="checkbox-fontas"></span>
                  関東
                </label>
              </li>
              <li class="y-box-item">
                <label for="y-box-item-4">
                  <input type="checkbox" name="your-area" id="y-box-item-4" class="checkbox" value="10" type-data="s-area">
                  <span class="checkbox-fontas"></span>
                  中部
                </label>
              </li>
              <li class="y-box-item">
                <label for="y-box-item-5">
                  <input type="checkbox" name="your-area" id="y-box-item-5" class="checkbox" value="11" type-data="s-area">
                  <span class="checkbox-fontas"></span>
                  近畿
                </label>
              </li>
              <li class="y-box-item">
                <label for="y-box-item-6">
                  <input type="checkbox" name="your-area" id="y-box-item-6" class="checkbox" value="12" type-data="s-area">
                  <span class="checkbox-fontas"></span>
                  中国
                </label>
              </li>
              <li class="y-box-item">
                <label for="y-box-item-7">
                  <input type="checkbox" name="your-area" id="y-box-item-7" class="checkbox" value="13" type-data="s-area">
                  <span class="checkbox-fontas"></span>
                  四国
                </label>
              </li>
              <li class="y-box-item">
                <label for="y-box-item-8">
                  <input type="checkbox" name="your-area" id="y-box-item-8" class="checkbox" value="14" type-data="s-area">
                  <span class="checkbox-fontas"></span>
                  九州
                </label>
              </li>
            </ul>
          </div>
        </div>
        <!-- エージェントを探してみる -->
        <div class="btn-search-for-agent">
          <button type="submit" onclick="searchStart()">
            エージェントを探してみる
            <i class="fa-solid fa-caret-right"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- 申し込みするための３ステップ -->
    <div class="step-explanation-contents">
      <h3>
        \ 申し込みするための３ステップ /
      </h3>
      <p>
        選んだ企業に申し込んで、会社が自分にあっているか話してみよう！
      </p>
      <div class="step-container">
        <div class="step step-1">
          <div class="step-1-img">

          </div>
          <div class="step-1-title">
            <p>
              <span class="step-1-number">1</span>
              自分に合ったエージェントを探してみよう
            </p>
            <p class="step-1-text">
              <span>絞りこみ検索</span>を使って、自分に合ったエージェントを探すことができます。
              <br>
              また、<span>詳細絞りこみ</span>を使って、さらに絞りこみをすることができます。
            </p>
          </div>
        </div>
        <div class="step step-2">
          <div class="step-2-img">

          </div>
          <div class="step-2-title">
            <p>
              <span class="step-2-number">2</span>
              気になるエージェントを詳しく見てみよう
            </p>
            <p class="step-2-text">
              企業一覧で気になったエージェントの<span>詳細ページ</span>に飛んでみよう！
              <br>
              <span>お気に入りに追加</span>しておけば、簡単に見返したり、一括で申し込むことができます。
            </p>
          </div>
        </div>
        <div class="step step-3">
          <div class="step-3-img">

          </div>
          <div class="step-3-title">
            <p>
              <span class="step-3-number">3</span>
              申し込みして実際に話をしてみよう！
            </p>
            <p class="step-3-text">
              実際に話してみないと、<span>本当に自分に合っているか</span>はわからない！
              <br>
              就活において、とても重要になるエージェントとの相性を確認してみよう！
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- 利用者の声 -->
    <div class="user-voice-contents">
      <h3>
        \ 利用者の声 /
      </h3>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="user-1-contents">
              <div class="user-1-img">
                <img src="./assets/img/user-1.jpg" alt="">
              </div>
              <div class="user-1-comment">
                <h4>
                  K.Tさん
                </h4>
                <p>
                  エージェントやアドバイザーの人たちとの相性を確認したかったので、CRAFTでいろんなエージェントの方とお話しして自分に合うエージェントを選びました。<span>内定速度や業界特化など様々な観点から比較できた</span>ので、自分にあったアドバイザーの人と出会うことができて無事就活を乗り越えることができました！
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="user-2-contents">
              <div class="user-2-img">
                <img src="./assets/img/user-2.jpg" alt="">
              </div>
              <div class="user-2-comment">
                <h4>
                  K.Iさん
                </h4>
                <p>
                  就活がうまくいかなかった私は、時間の制約もある中、CRAFTを利用して<span>内定のスピードや面接対策に重点</span>を置いた最適な就活エージェントを見つけることができました。さらに、エージェント企業の対応時間も比較することができたため、<span>平日の日中が忙しい私にも合ったエージェント</span>を見つけることができました。就活においては、エージェント企業に相談してからわずか3週間で内定を得ることができました。
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="user-3-contents">
              <div class="user-3-img">
                <img src="./assets/img/user-3.jpg" alt="">
              </div>
              <div class="user-3-comment">
                <h4>
                  A.Uさん
                </h4>
                <p>
                  元々<span>コミュニケーションや言語化が苦手</span>な私はES添削や面接対策などのサポートが手厚い企業を探していました。CRAFTではさまざまな項目を比較した上、<span>実際に話をする</span>ことで、本当に自分に合ったエージェントを選ぶことができました。その結果、苦手意識のあった面接でも手応えを感じ、第一志望の企業から内定をいただくことができました！
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <!-- よくあるご質問 -->
    <div class="common-question-contents">
      <h3>
        よくあるご質問
      </h3>
      <div class="question-1">
        <div class="question-title" id="q1-question">
          <span class="question-icon">
            <span>Q</span>1
          </span>
          <p class="question-contents">
            申し込みをするとエージェントに登録ができるのでしょうか？
          </p>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="question-answer" id="q1-answer">
          <span class="answer-icon">
            A.
          </span>
          <p class="answer-contents">
            いいえ、申し込みをするとエージェントに登録されるわけではありません。申し込みをすると、エージェントと対話するためのコンタクトをとることができます。
          </p>
        </div>
      </div>
      <div class="question-2">
        <div class="question-title" id="q2-question">
          <span class="question-icon">
            <span>Q</span>2
          </span>
          <p class="question-contents">
            自分が追加したお気に入りを見るにはどうしたら良いですか？？
          </p>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="question-answer" id="q2-answer">
          <span class="answer-icon">
            A.
          </span>
          <p class="answer-contents">
            画面下部(PC版の場合は画面上部)のメニューバーにある「FAVORITE」をクリックすると、お気に入りに追加した企業の一覧を見ることができます。お気に入り一覧からは一括で登録することができます。
          </p>
        </div>
      </div>
      <div class="question-3">
        <div class="question-title" id="q3-question">
          <span class="question-icon">
            <span>Q</span>3
          </span>
          <p class="question-contents">
            自分に合った時間帯に相談できる就職エージェントを探したいです。どうしたらいいですか？
          </p>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="question-answer" id="q3-answer">
          <span class="answer-icon">
            A.
          </span>
          <p class="answer-contents">
            企業一覧ページの詳細絞りこみ検索から、「対応可能日時」の項目から、自分の希望する時間帯を選択することができます。
          </p>
        </div>
      </div>
      <div class="question-4">
        <div class="question-title" id="q4-question">
          <span class="question-icon">
            <span>Q</span>4
          </span>
          <p class="question-contents">
            履歴を見るにはどうしたら良いですか？？
          </p>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="question-answer" id="q4-answer">
          <span class="answer-icon">
            A.
          </span>
          <p class="answer-contents">
            画面下部(PC版の場合は画面上部)のメニューバーにある「HISTORY」をクリックすると、企業詳細ページを閲覧した企業の履歴一覧を見ることができます。
          </p>
        </div>
      </div>
      <div class="question-5">
        <div class="question-title" id="q5-question">
          <span class="question-icon">
            <span>Q</span>5
          </span>
          <p class="question-contents">
            サイト上での申し込み後、エージェント企業との話し合いはどのように進められますか？
          </p>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="question-answer" id="q5-answer">
          <span class="answer-icon">
            A.
          </span>
          <p class="answer-contents">
            登録されたメールなどの連絡先に登録企業から連絡が来ますので、そちらからエージェント企業とコンタクトをとることができます。その後、お互いの都合の良い日時を決めて、面談を行うことで、本当に自分に合ったエージェント企業か確かめることができます。
          </p>
        </div>
      </div>
      <div class="question-6">
        <div class="question-title" id="q6-question">
          <span class="question-icon">
            <span>Q</span>6
          </span>
          <p class="question-contents">
            エージェント企業を利用するのに料金は発生しますか？
          </p>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="question-answer" id="q6-answer">
          <span class="answer-icon">
            A.
          </span>
          <p class="answer-contents">
            いいえ、エージェント企業を利用するのに料金は発生しません。エージェント企業は企業から報酬を受け取ることで運営されています。また、CRAFT上での登録などにも料金は発生しません。
          </p>
        </div>
      </div>
      <div class="question-7">
        <div class="question-title" id="q7-question">
          <span class="question-icon">
            <span>Q</span>7
          </span>
          <p class="question-contents">
            エージェント企業によって、得意な業界や職種はありますか？
          </p>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="question-answer" id="q7-answer">
          <span class="answer-icon">
            A.
          </span>
          <p class="answer-contents">
            はい、あります。エージェント企業の詳細ページには、得意な業界や職種が記載されています。また、企業一覧ページの詳細絞りこみ検索から、得意な業界や職種を選択することで、自分に求めている業界に強いエージェント企業を探すことができます。
          </p>
        </div>
      </div>
      <div class="question-8">
        <div class="question-title" id="q8-question">
          <span class="question-icon">
            <span>Q</span>8
          </span>
          <p class="question-contents">
            就活エージェントは1社に絞って利用するのがいいですか？
          </p>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="question-answer" id="q8-answer">
          <span class="answer-icon">
            A.
          </span>
          <p class="answer-contents">
            いいえ、複数のエージェント企業を併用することで、より多くの企業と面談を行うことができたり、各エージェントの強みをバランスよく利用して、より良い就職活動を行うことができます。
          </p>
        </div>
      </div>
    </div>
    <!-- ポップ(モーダル) -->
    <!-- ポップ(1ページ目) -->
    <div class="pop-1 active">
      <div class="pop-area-1">
        <h3 class="pop-1-number">1/3</h3>
        <h2 class="pop-1-title">就活エージェントとは...？</h2>
        <div class="pop-1-img">
          <img src="./assets/img/580.png" alt="">
        </div>
        <div class="pop-1-content">
          就活のプロフェッショナルであるアドバイザーが担当につき、就職活動を一貫してサポートしてくれるサービスのこと。
          <br>
          ほとんどの企業が<span>無料</span>で利用できる。
        </div>
        <div class="pop-1-btn">
          <div class="pop-1-skip-btn">
            <button>
              スキップする
              <i class="fa-solid fa-caret-right"></i>
            </button>
          </div>
          <div class="pop-1-next-btn">
            <button>
              次へ
              <i class="fa-solid fa-caret-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- ポップ(2ページ目) -->
    <div class="pop-2">
      <div class="pop-area-2">
        <h3 class="pop-2-number">2/3</h3>
        <h2 class="pop-2-title">でも...重要なのはサポートが本当にあなたに合うかどうか！</h2>
        <div class="pop-2-img">
          <img src="./assets/img/1126.png" alt="">
        </div>
        <div class="pop-2-content">
          エージェントによって特徴が違うため、<span>自分にあった</span>就活エージェント選びが非常に重要です。
        </div>
        <div class="pop-2-btn">
          <div class="pop-2-skip-btn">
            <button>
              スキップする
              <i class="fa-solid fa-caret-right"></i>
            </button>
          </div>
          <div class="pop-2-next-btn">
            <button>
              次へ
              <i class="fa-solid fa-caret-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- ポップ(3ページ目) -->
    <div class="pop-3">
      <div class="pop-area-3">
        <div class="modal-close-button">
          <i class="fa-solid fa-xmark"></i>
        </div>
        <h3 class="pop-3-number">3/3</h3>
        <h2 class="pop-3-title">就活エージェントを利用する前に一度話してみよう！</h2>
        <div class="pop-3-img">
          <img src="./assets/img/approach.png" alt="">
        </div>
        <div class="pop-3-content">
          CRAFTで登録後に、エージェントから連絡がきて話をすることができます。
        </div>
        <div class="pop-3-btn">
          <button>
            <a href="./clientList.php">
              <p class="search-client">エージェントを探す</p>
              <i class="fa-solid fa-caret-right"></i>
            </a>
          </button>
        </div>
      </div>
    </div>
    <!-- 使い方はこちらをタップ -->
    <div class="how-to-use">
      <button class="how-to-use-btn">
        使い方は
        <br>
        こちらをタップ
      </button>
    </div>
    <!-- エージェントを探してみる(画面左下固定) -->
    <div class="search-agent">
      <a href="./clientList.php">
        <button class="search-agent-btn">
          <i class="fa-solid fa-magnifying-glass"></i>
          エージェントを
          <br>
          探してみる
        </button>
      </a>
    </div>
  </main>
  <!-- フッター -->
  <?php include_once('components/footer.php') ?>
</body>

</html>