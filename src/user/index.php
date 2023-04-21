<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRAFT Toppage</title>
  <link rel="stylesheet" href="./assets/styles/normalize.css">
  <link rel="stylesheet" href="./assets/styles/top.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" defer></script>
  <script src="./assets/scripts/index.js" defer></script>
</head>
<body>
  <!-- ヘッダー -->
  <header>
    <h1 class="header-title">
      CRAFT
    </h1>
    <div class="header-boozer-logo">
      <img src="./assets/img/boozer_logo_white.png" alt="boozer">
    </div>
  </header>
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
        
      </div>
    </div>
    <!-- ポップ(モーダル) -->

  </main>
  <footer>
    <div class="footer-boozer-logo">
      <img src="./assets/img/boozer_logo_white.png" alt="boozer">
    </div>
    <ul class="footer-link-list">
      <li>
        お問い合わせ
      </li>
      <li>
        運営会社
      </li>
      <li>
        利用規約
      </li>
      <li>
        プライバシーポリシー
      </li>
    </ul>
    <div class="footer-craft">
      © 2023 CRAFT
    </div>
  </footer>
</body>
</html>