<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/styles/login-signup.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <!-- fontawesome読み込み -->
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous" defer></script>
  <!-- jquery読み込み -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous" defer></script>
  <title>パスワード再設定</title>
</head>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>パスワード再設定</header>
      <form action="#">
        <div class="error-text"></div>
          <div class="field input">
            <label for="loginID">ログインID</label>
            <input type="email" name="email" placeholder="ログインIDを入力してください" id="loginID">
          </div>
          <div class="field input">
            <label for="nowPassword">現在のパスワード</label>
            <input type="password" name="password" placeholder="現在のパスワードを入力してください" id="nowPassword" class="nowPassword">
            <i class="fa-solid fa-eye toggle-password-now" ></i>
          </div>
          <div class="field input">
            <label for="newPassword">新しいパスワード</label>
            <input type="password" name="newpassword" placeholder="新しいパスワードを入力してください" id="newPassword" class="newPassword">
            <i class="fa-solid fa-eye toggle-password-new" ></i>
          </div>
          <div class="field input">
            <label for="confirmPassword">新しいパスワード(確認)</label>
            <input type="password" name="confirmpassword" placeholder="もう一度パスワードを入力してください" id="confirmPassword" class="confirmPassword">
            <i class="fa-solid fa-eye toggle-password-confirm" ></i>
          </div>
          <div class="field button">
            <input type="submit" value="再設定する">
          </div>
      </form>
    </section>
  </div>
  <script src="../assets/scripts/auth/pass-show-hide.js"></script>
  <script src="../assets/scripts/auth/pwChanges.js"></script>
</body>
</html>