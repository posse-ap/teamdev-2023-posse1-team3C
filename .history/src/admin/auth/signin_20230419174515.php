<?php
include_once('header.php');
?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
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
            <input type="submit" value="Continue to chat">
          </div>
      </form>
      <div class="link">登録がまだの人はこちら<i class="fa-solid fa-arrow-right"></i><a href="index.php">signup</a></div>
    </section>
  </div>
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="assets/javascript/pass-show-hide.js"></script>
  <script src="assets/javascript/login.js"></script>
</body>
</html>