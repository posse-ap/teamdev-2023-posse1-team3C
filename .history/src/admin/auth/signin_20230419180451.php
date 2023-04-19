<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/styles/login-signup.css">
  <title>admin画面ログインページ</title>
</head>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>ログイン画面</header>
      <form action="#">
        <div class="error-text"></div>
          <div class="field input">
            <label for="">E-mail Address</label>
            <input type="text" name="email" placeholder="Enter your email address">
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input type="password" name="password"placeholder="Enter your password">
            <i class="fa-solid fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="ログイン">
          </div>
      </form>
    </section>
  </div>
  <script src="../assets/scripts/auth/pass-show-hide.js"></script>
</body>
</html>