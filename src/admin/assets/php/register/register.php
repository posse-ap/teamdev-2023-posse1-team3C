<?php
if (isset($_POST["registerButton"])) {
  // 入力サれた企業基本情報をcompaniesテーブルに格納
  include("../../../../dbconnect.php");
  $sql_register_basic = "INSERT INTO Companies (company, email, service, address, phoneNumber, registered_at, date, url, contactType, online, started_at, finished_at) VALUES (:company, :email, :address, :service, :phoneNumber, :registered_at ,:date, :url, :contactType, :online, :started_at, :finished_at)";
  $register = $dbh->prepare($sql_register_basic);
  $register->bindValue(":company", $_POST["company"], PDO::PARAM_STR);
  $register->bindValue(":service", $_POST["service"], PDO::PARAM_STR);
  $register->bindValue(":address", $_POST["address"], PDO::PARAM_STR);
  $register->bindValue(":phoneNumber", $_POST["phoneNumber"], PDO::PARAM_STR);
  $register->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
  $register->bindValue(":date", $_POST["date"], PDO::PARAM_STR);
  $register->bindValue(":url", $_POST["url"], PDO::PARAM_STR);
  $register->bindValue(":online", $_POST["online"], PDO::PARAM_STR);
  $register->bindValue(":contactType", $_POST["contactType"], PDO::PARAM_STR);
  $register->bindValue(":registered_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
  $register->bindValue(":started_at", date_format(date_create_from_format('m/d/Y', $_POST["start"]), 'Y-m-d 0:0:0'));
  $register->bindValue(":finished_at", date_format(date_create_from_format('m/d/Y', $_POST["end"]), 'Y-m-d 23:59:59'));
  $register->execute();

  // 掲載情報をCompaniesDetailsテーブルに格納
  // 画像をアップロード
  $dir_path_hero = dirname(__FILE__) . "/../../../../user/assets/img/heroes" . "/" . $_POST["company"] . "/";
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
  $dir_path = dirname(__FILE__) . "/../../../../user/assets/img/stories" . "/" . $_POST["company"] . "/";
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
  $sql_register_user = "INSERT INTO ClientUsers (company_id, email, password) values (:company_id, :email, :password)";
  $register_user = $dbh->prepare($sql_register_user);
  // ランダムな文字列を出力し、それをパスワードとする
  $password = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 8);
  $register_user->execute([
    ":company_id" => $company_id,
    ":email" => $_POST["email"],
    ":password" => password_hash($password, PASSWORD_DEFAULT)
  ]);

  // 生成したパスワードをメールで送信
  $to = $_POST["email"];
  $subject = "パスワード設定のお知らせ";
  $from = "admin@example.com";
  $message = "<html><body><p>パスワードを設定しました。</p><p>設定したのパスワードは <b>" . $password . "</b> です。</p></body></html>";
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "From: $from  \r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n" . "Content-Transfer-Encoding: base64\r\n";
  // メール送信
  mb_send_mail($to, $subject, $message, $headers);

  // 企業一覧ページに戻る
  header("Location: ../../../../admin/clientList.php");
}
