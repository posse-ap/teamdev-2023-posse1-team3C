<?php include('../dbconnect.php') ?>
<?php include('./assets/php/clientList/clientDetails.php') ?>

<!-- head読み込み -->
<?php
include(dirname(__FILE__) . '/components/head.php');
?>
<title>admin画面企業詳細ページ</title>
<?php include(dirname(__FILE__) . '/components/link.php') ?>
<link rel="stylesheet" href="./assets/styles/clientDetails/clientDetails.css">
<?php if (isset($passwordAlert)) { ?>

  <script>
    <?php echo $passwordAlert ?>
  </script>
<?php } ?>
</head>

<body>
  <!-- header読み込み -->
  <?php include(dirname(__FILE__) . '/components/header.php'); ?>
  <div class="wrapper">
    <!-- sidebar読み込み -->
    <?php include(dirname(__FILE__) . '/components/sidebar.php'); ?>
    <main class="pt-20">
      <section class="w-4/5 text-center">
        <h2 class="mb-4 page-title">企業詳細情報</h2>
      </section>
      <section class="flex status-container">
        <h3 class="status-title">掲載状況</h3>
        <!-- 今日の日付と比較して、終了日を過ぎていないなら -->
        <div class="status-now">
          <?php if (strtotime(date("Y/m/d")) < strtotime($resultcompany["finished_at"])) { ?>
            <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 h-6">掲載中</span>
          <?php } else { ?>
            <!-- 今日の日付と比較して、終了日を過ぎているなら -->
            <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300 h-5">掲載停止中</span>
          <?php } ?>
        </div>
        <form action="./assets/php/clientList/changeFinished_at.php" method="post" class="flex">
          <input type="hidden" name="company_id" value="<?php echo $resultcompany["id"] ?>">
          <div class="relative max-w-sm">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="掲載終了日を更新" name="selected_at">
          </div>
          <div>
          <button type="submit" name="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">変更</button>
          </div>
        </form>
      </section>
      <!-- 企業基本情報テーブル -->
      <section>
        <div class="relative overflow-x-auto mb-5">
          <h3 class="client-info-table-title">企業基本情報</h3>
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 client-info-table">
            <tbody>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 client-info-title">企業名
                </th>
                <td class="px-6 py-4 bg-white">
                  <?php echo $resultcompany["company"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 client-info-title">エージェントサービス名
                </th>
                <td class="px-6 py-4 bg-white">
                  <?php echo $resultcompany["service"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 client-info-title">所在地
                </th>
                <td class="px-6 py-4 bg-white">
                  <?php echo $resultcompany["address"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 client-info-title">連絡用電話番号
                </th>
                <td class="px-6 py-4 bg-white">
                  <?php echo $resultcompany["phoneNumber"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 client-info-title">連絡用メールアドレス
                </th>
                <td class="px-6 py-4 bg-white">
                  <?php echo $resultcompany["email"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 client-info-title">営業時間
                </th>
                <td class="px-6 py-4 bg-white">
                  <?php echo $resultcompany["Date"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 client-info-title">公式サイトURL
                </th>
                <td class="px-6 py-4 bg-white">
                  <?php echo $resultcompany["URL"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 client-info-title">登録学生とのコンタクト形態
                </th>
                <td class="px-6 py-4 bg-white">
                  <?php echo $resultcompany["contactType"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 client-info-title">オンライン対応の可否
                </th>
                <td class="px-6 py-4 bg-white">
                  <?php echo $resultcompany["online"] ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
      <!-- パスワード再設定 -->
      <section class="flex justify-center gap-8 align-middle password-container">
        <h3>パスワード再設定</h3>
        <form action="./assets/php/clientList/resetClientPassword.php" method="POST">
          <input type="hidden" name="company_name" value="<?php echo $resultcompany["company"] ?>">
          <input type="hidden" name="company_id" value="<?php echo $resultcompany["id"] ?>">
          <input type="hidden" name="company_mail" value="<?php echo $resultcompany["email"] ?>">
          <button type="submit" name="resetSubmit" id="resetButton" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">生成・再設定</button>
        </form>
      </section>
      <!-- 登録学生情報 -->
      <section class="student-info-container">
        <h3>登録学生情報</h3>
        <div class="text-center">
          <form action="#" method="POST" class="flex">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white student-info-title">月毎の学生情報を見る</label>
            <select name="month" id="month" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-48 month-select">
              <option selected>月を選択してください</option>
              <option value="2023-04">2023/04</option>
              <option value="2023-03">2023/03</option>
              <option value="2023-02">2023/02</option>
              <option value="2023-01">2023/01</option>
              <option value="2022-12">2022/12</option>
              <option value="2022-11">2022/11</option>
              <option value="2022-10">2022/10</option>
              <option value="2022-09">2022/09</option>
            </select>
            <input type="hidden" name="company_id" value="<?php echo $resultcompany["id"] ?>" id="input">
            <button type="submit" name="changeMonthButton" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" id="month-btn">変更</button>
          </form>
        </div>
        <div>
          <div>
            有効学生数：
            <span class="student-number"><?php print_r($resultCountStudents["totalStudents"]) ?></span>
            人
          </div>
          <div>
            (無効学生数:
            <span class="invalid-student-number"><?php print_r($resultCountStudentsInvalid["totalStudentsInvalid"]) ?></span>
            人)
          </div>
        </div>
      </section>
      <!-- 学生情報テーブル -->
      <section>
        <div class="relative overflow-x-auto mb-5">
          <h3 class="student-info-table-title">学生情報一覧</h3>
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 student-table">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3 student-table-title">
                  登録学生氏名
                </th>
                <th scope="col" class="px-6 py-3 student-table-title">
                  学生ID番号
                </th>
                <th scope="col" class="px-6 py-3 student-table-title">
                  登録日時
                </th>
                <th scope="col" class="px-6 py-3 student-table-title">
                  Status
                </th>
                <th scope="col" class="px-6 py-3 student-table-title">
                  詳細へ
                </th>
              </tr>
            </thead>
            <tbody id="tbody">
              <?php foreach ($CompaniesStudentsLink as $list) { ?>
                <tr class="border-b border-gray-200 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-white">
                    <?php echo $list["Name"] ?>
                  </th>
                  <td class="px-6 py-4 bg-white">
                    <?php echo $list["student_id"] ?>
                  </td>
                  <td class="px-6 py-4 bg-white">
                    <?php echo $list["registered_at"] ?>
                  </td>
                  <td class="px-6 py-4 bg-white">
                    <?php echo $list["status"] ?>
                  </td>
                  <td class="px-6 py-4 bg-white">
                    <a href="http://localhost:8080/admin/studentDetails.php?id=<?php echo $list["id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                      <?php echo $list["student_id"] ?>
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </section>
      <!-- 企業一覧に戻る -->
      <section class="text-center list-btn">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 " onclick="redirectToClientList()">企業一覧へ</button>
      </section>

    </main>
  </div>
  <script>
    // 企業一覧ページに戻る
    function redirectToClientList() {
      window.location.href = "http://localhost:8080/admin/clientList.php";
    }
  </script>
  <script src="assets/scripts/index.js"></script>
</body>


</html>