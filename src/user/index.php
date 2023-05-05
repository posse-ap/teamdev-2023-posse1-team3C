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
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" defer></script>
  <script src="./assets/scripts/index.js" defer></script>
</head>
<body>
  <!-- ヘッダー -->
  <?php include_once('components/header.php')?>
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
    <!-- エージェントを探してみる -->
    <div class="btn-search-for-agent">
      <a href="./clientList.php">
        <button>
          エージェントを探してみる
          <i class="fa-solid fa-caret-right"></i>
        </button>
      </a>
    </div>
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

        </div>
        <div class="step step-2">

        </div>
        <div class="step step-3">

        </div>
      </div>
      <div class="btn-agent-list">
        <a href="./clientList.php">
          <button>
            エージェント一覧ページ
            <i class="fa-solid fa-caret-right"></i>
          </button>
        </a>
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

            </div>
          </div>
          <div class="swiper-slide">
            <div class="user-2-contents">
              
            </div>
          </div>
          <div class="swiper-slide">
            <div class="user-3-contents">
              
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
            Q.
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
            Q.
          </span>
          <p class="question-contents">
          履歴を見るにはどうしたら良いですか？？
          </p>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="question-answer" id="q2-answer">
          <span class="answer-icon">
            A.
          </span>
          <p class="answer-contents">
            画面下部(PC版の場合は画面上部)のメニューバーにある「HISTORY」をクリックすると、企業詳細ページを閲覧した企業の履歴一覧を見ることができます。
          </p>
        </div>
      </div>
      <div class="question-3">
        <div class="question-title" id="q3-question">
          <span class="question-icon">
            Q.
          </span>
          <p class="question-contents">
          内定速度のはやい就職エージェントを探したいです。どうしたらいいですか？
          </p>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="question-answer" id="q3-answer">
          <span class="answer-icon">
            A.
          </span>
          <p class="answer-contents">
          画面下の右端の検索マークをタップして、検索から内定速度早い順に並べるをタップすると内定速度の早い順に並べ替えることができます。
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
            エージェントを探す
            <i class="fa-solid fa-caret-right"></i>
          </button>
        </div>
      </div>
    </div>
  </main>
  <!-- フッター -->
  <?php include_once('components/footer.php')?>
</body>
</html>