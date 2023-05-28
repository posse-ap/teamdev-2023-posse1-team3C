<?php
if (isset($_POST["registerButton"])) {
  // 入力サれた企業基本情報をcompaniesテーブルに格納
  include("../../../../dbconnect.php");
  $sql_register_basic = "INSERT INTO Companies (company, email, postcode, address, service, phoneNumber, registered_at, date, url, contactType, online, started_at, finished_at) VALUES (:company, :email, :postcode ,:address, :service, :phoneNumber, :registered_at ,:date, :url, :contactType, :online, :started_at, :finished_at)";
  $register = $dbh->prepare($sql_register_basic);
  $register->execute([
    ":company" => $_POST["company"],
    ":service" => $_POST["service"],
    ":postcode" => $_POST["postcode"],
    ":address" => $_POST["address"],
    ":phoneNumber" => $_POST["phoneNumber"],
    ":email" => $_POST["email"],
    ":date" => $_POST["date"],
    ":url" => $_POST["url"],
    ":online" => $_POST["online"],
    ":contactType" => $_POST["contactType"],
    ":registered_at" => date("Y-m-d H:i:s"),
    ":started_at" => date_format(date_create_from_format('m/d/Y', $_POST["start"]), 'Y-m-d 0:0:0'),
    ":finished_at" => date_format(date_create_from_format('m/d/Y', $_POST["end"]), 'Y-m-d 23:59:59')
  ]);

  // 掲載情報をCompaniesDetailsテーブルに格納
  // 画像をアップロード
  $dir_path_hero = dirname(__FILE__) . "/../../../../user/assets/img/heroes" . "/" . $_POST["service"] . "/";
  if (!is_dir($dir_path_hero)) {
    mkdir($dir_path_hero, 0777);
  }
  $image_name = uniqid(mt_rand(), true) . "." . substr(strrchr($_FILES["heroImage"]["name"], "."), 1);
  $image_path_hero = $dir_path_hero . $image_name;
  move_uploaded_file(
    $_FILES["heroImage"]["tmp_name"],
    $image_path_hero
  );

  // 企業詳細情報をcompaniesDetailsに格納
  $sql_register_details = "INSERT INTO CompaniesDetails (detail_id, photo, formType, type, achievement, people, scale, search, ES, practice, seminar, community, supportType, Date, description, specialChoose) values (:detail_id, :photo, :formType, :type, :achievement, :people, :scale, :search, :ES, :practice, :seminar, :community, :supportType, :Date, :description, :specialChoose)";
  $register_details = $dbh->prepare($sql_register_details);
  $register_details->execute([
    ":detail_id" => $dbh->lastInsertId(),
    ":photo" => $image_name,
    ":formType" => $_POST["formType"],
    ":type" => $_POST["type"],
    ":achievement" => $_POST["achievement"],
    ":people" => $_POST["people"],
    ":scale" => $_POST["scale"],
    ":search" => $_POST["search"],
    ":ES" => $_POST["ES"],
    ":practice" => $_POST["practice"],
    ":seminar" => $_POST["seminar"],
    ":community" => $_POST["community"],
    ":supportType" => $_POST["supportType"],
    ":Date" => $_POST["Date"],
    ":description" => $_POST["description"],
    ":specialChoose" => $_POST["specialChoose"]
  ]);

  // 対応地域をAreasCompaniesLinkに格納
  $company_id = $dbh->lastInsertId();
  $sql_register_area = "INSERT INTO AreasCompaniesLink (company_id, area_id) value (:company_id, :area_id)";
  $register_area = $dbh->prepare($sql_register_area);
  $areas = $_POST["Areas"];
  foreach ($areas as $area) {
    $register_area->execute([
      ":company_id" => $company_id,
      ":area_id" => $area
    ]);
  };

  // 対応卒業年度をCompaniesGraduatedLinkに格納
  $sql_register_graduate = "INSERT INTO CompaniesGraduatedLink (company_id, graduated_id) value (:company_id, :graduated_id)";
  $register_graduate = $dbh->prepare($sql_register_graduate);
  $graduated_years = $_POST["graduated_years"];
  foreach ($graduated_years as $graduated_year) {
    $register_graduate->execute([
      ":company_id" => $company_id,
      ":graduated_id" => $graduated_year
    ]);
  };

  // 星評価をRatingsテーブルに格納
  $sql_register_ratings = "INSERT INTO Ratings (rating_id, people, support, achievement, speed, amount) values (:rating_id, :people, :support, :achievement, :speed, :amount)";
  $register_ratings = $dbh->prepare($sql_register_ratings);
  $register_ratings->execute([
    ":rating_id" => $company_id,
    ":people" => $_POST["peopleRate"],
    ":support" => $_POST["supportRate"],
    ":achievement" => $_POST["achievementRate"],
    ":speed" => $_POST["speedRate"],
    ":amount" => $_POST["amountRate"]
  ]);

  // サクセスストーリーをStoriesテーブルに格納
  $sql_register_story = "INSERT INTO Stories (company_id, title, time, university, name, story, photo) values (:company_id, :title, :time, :university, :name, :story, :photo)";
  $register_story = $dbh->prepare($sql_register_story);
  $dir_path = dirname(__FILE__) . "/../../../../user/assets/img/stories" . "/" . $_POST["service"] . "/";
  if (!is_dir($dir_path)) {
    mkdir($dir_path, 0777);
  }
  $image_name_first = uniqid(mt_rand(), true) . "." . substr(strrchr($_FILES["successFirstImage"]["name"], "."), 1);
  $image_path_first = $dir_path . $image_name_first;
  move_uploaded_file(
    $_FILES["successFirstImage"]["tmp_name"],
    $image_path_first
  );
  $register_story->execute([
    ":company_id" => $company_id,
    ":title" => $_POST["successFirstTitle"],
    ":time" => $_POST["successFirstTime"],
    ":university" => $_POST["successFirstUniversity"],
    ":name" => $_POST["successFirstName"],
    ":story" => $_POST["successFirstStory"],
    ":photo" => $image_name_first
  ]);

  $image_name_second = uniqid(mt_rand(), true) . "." . substr(strrchr($_FILES["successSecondImage"]["name"], "."), 1);
  $image_path_second = $dir_path . $image_name_second;
  move_uploaded_file(
    $_FILES["successSecondImage"]["tmp_name"],
    $image_path_second
  );
  $register_story->execute([
    ":company_id" => $company_id,
    ":title" => $_POST["successSecondTitle"],
    ":time" => $_POST["successSecondTime"],
    ":university" => $_POST["successSecondUniversity"],
    ":name" => $_POST["successSecondName"],
    ":story" => $_POST["successSecondStory"],
    ":photo" => $image_name_second
  ]);

  $image_name_third = uniqid(mt_rand(), true) . "." . substr(strrchr($_FILES["successThirdImage"]["name"], "."), 1);
  $image_path_third = $dir_path . $image_name_third;
  move_uploaded_file(
    $_FILES["successThirdImage"]["tmp_name"],
    $image_path_third
  );
  $register_story->execute([
    ":company_id" => $company_id,
    ":title" => $_POST["successThirdTitle"],
    ":time" => $_POST["successThirdTime"],
    ":university" => $_POST["successThirdUniversity"],
    ":name" => $_POST["successThirdName"],
    ":story" => $_POST["successThirdStory"],
    ":photo" => $image_name_third
  ]);

  // 推しポイントをGoodPointsテーブルに格納
  $sql_register_goodPoint = "INSERT INTO GoodPoints (company_id, GoodPoint) values (:company_id, :GoodPoint)";
  $register_goodPoint = $dbh->prepare($sql_register_goodPoint);
  $goodPoints = $_POST["goodPoints"];
  foreach ($goodPoints as $goodPoint) {
    $register_goodPoint->execute([
      ":company_id" => $company_id,
      ":GoodPoint" => $goodPoint
    ]);
  };

  // パスワードを生成してClintUsersテーブルに格納
  $sql_register_user = "INSERT INTO ClientUsers (company_id, email, password, created_at) values (:company_id, :email, :password, :created_at)";
  $register_user = $dbh->prepare($sql_register_user);
  // ランダムな文字列を出力し、それをパスワードとする
  $password = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 8);
  $register_user->execute([
    ":company_id" => $company_id,
    ":email" => $_POST["email"],
    ":password" => password_hash($password, PASSWORD_DEFAULT),
    ":created_at" => date("Y-m-d H:i:s")
  ]);

  // 生成したパスワードをメールで送信
  $to = $_POST["email"];
  $subject = "【株式会社CRAFT】企業情報登録完了のお知らせ";
  $from = "admin@example.com";
  $message = "
  <html>
  <head>
    <title>企業情報登録完了のお知らせ</title>
  </head>
  <body>
    <p>この度は、就活サイトにご登録いただきありがとうございます。</p>
    <p>以下の内容で登録が完了したことをお知らせします。</p>
    <ul>
      <li>企業名：" . $_POST["company"] . "</li>
      <li>サービス名：" . $_POST["service"] . "</li>
      <li>郵便番号：" . $_POST['postcode'] . "</li>
      <li>住所：" . $_POST['address'] . "</li>
      <li>電話番号：" . $_POST['phoneNumber'] . "</li>
      <li>メールアドレス：" . $_POST['email'] . "</li>
      <li>対応可能日時：" . $_POST['date'] . "</li>
      <li>サービスのURl：<a href = " . $_POST['url'] . " ></a></li>
      <li>オンライン対応：" . $_POST['online'] . "</li>
      <li>お問い合わせ方法：" . $_POST['contactType'] . "</li>
      <li>掲載開始日：" . $_POST['start'] . "</li>
      <li>掲載終了日：" . $_POST['end'] . "</li>
    </ul>
    <p>以上の内容に誤り等がございましたら、申し訳ございませんが
    <a href= 'https://docs.google.com/forms/d/e/1FAIpQLScK_Y69STQGpeKfAcHh1zNIb6tiVVO-2ryhKq2UdzpDbIihJw/viewform'>こちら</a>
    から連絡をして頂けると幸いです</p>
    <p>また、以下の仮パスワードでパスワードを再設定後、ログインしてください</p>
    <p>パスワード：" . $password . "</p>
    <p>再設定画面は<a href='http://localhost:8080/client/auth/pwchanges.php'>こちら</a>です。</p>
    <p>引き続き、【株式会社CRAFT】をよろしくお願いいたします。</p>
  </body>
  </html>";
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "From: $from  \r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n" . "Content-Transfer-Encoding: base64\r\n";
  // メール送信
  mb_send_mail($to, $subject, $message, $headers);

  // 選択されたたぐをCompaniesTagsLinkに格納
  $sql_register_tag = "INSERT INTO CompaniesTagsLink (company_id, tag_id) value (:company_id, :tag_id)";
  $register_tag = $dbh->prepare($sql_register_tag);
  // 対応地域
  $areas = $_POST["your-area"];
  foreach ($areas as $area) {
    $register_tag->execute([
      ":company_id" => $company_id,
      ":tag_id" => $area
    ]);
  };
  // サポート形態
  $supportTypes = $_POST["support"];
  foreach ($supportTypes as $supportType) {
    $register_tag->execute([
      ":company_id" => $company_id,
      ":tag_id" => $supportType
    ]);
  };
  // 卒業年度
  $graduated_years = $_POST["graduate"];
  foreach ($graduated_years as $graduated_year) {
    $register_tag->execute([
      ":company_id" => $company_id,
      ":tag_id" => $graduated_year
    ]);
  };
  // 業界
  $agentTypes = $_POST["agent-type"];
  foreach ($agentTypes as $agentType) {
    $register_tag->execute([
      ":company_id" => $company_id,
      ":tag_id" => $agentType
    ]);
  };



  // 企業一覧ページに戻る
  header("Location: ../../../../admin/clientList.php");
}
