<?php include('../dbconnect.php') ?>
<?php include('./assets/php/clientList/clientDetails.php') ?>





<!-- head読み込み -->
<?php
include(dirname(__FILE__) . '/components/head.php');
?>
<?php if (isset($passwordAlert)) { ?>

  <script>
    <?php echo $passwordAlert ?>
  </script>
<?php } ?>
</head>

<body class="bg-gray-300">
  <!-- header読み込み -->
  <?php include(dirname(__FILE__) . '/components/header.php'); ?>
  <div class="wrapper">
    <!-- sidebar読み込み -->
    <?php include(dirname(__FILE__) . '/components/sidebar.php'); ?>
    <main class="pt-20">
      <section class="text-center">
        <h2 class="underline mb-4 ">企業詳細情報</h2>
      </section>
      <section class="flex justify-center gap-9 align-middle">
        <h3 class="">掲載状況</h3>
        <!-- 今日の日付と比較して、終了日を過ぎていないなら -->
        <?php if (strtotime(date("Y/m/d")) < strtotime($resultcompany["finished_at"])) { ?>
          <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 h-6">掲載中</span>
        <?php } else { ?>
          <!-- 今日の日付と比較して、終了日を過ぎているなら -->
          <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300 h-5">掲載停止中</span>
        <?php } ?>
        <form action="./assets/php/clientList/changeFinished_at.php" method="post">
          <input type="hidden" name="company_id" value="<?php echo $resultcompany["id"] ?>">
          <input type="date" name="selected_at">
          <button type="submit" name="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">変更</button>
        </form>
      </section>
      <!-- 企業基本情報テーブル -->
      <section>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-5 text-center">
          <h3 class="text-center">企業基本情報</h3>
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <tbody>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">企業名
                </th>
                <td class="px-6 py-4">
                  <?php echo $resultcompany["company"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">エージェントサービス名
                </th>
                <td class="px-6 py-4">
                  <?php echo $resultcompany["service"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">所在地
                </th>
                <td class="px-6 py-4">
                  <?php echo $resultcompany["address"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">連絡用電話番号
                </th>
                <td class="px-6 py-4">
                  <?php echo $resultcompany["phoneNumber"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">連絡用メールアドレス
                </th>
                <td class="px-6 py-4">
                  <?php echo $resultcompany["mail"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">営業時間
                </th>
                <td class="px-6 py-4">
                  <?php echo $resultcompany["Date"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">公式サイトURL
                </th>
                <td class="px-6 py-4">
                  <?php echo $resultcompany["URL"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">登録学生とのコンタクト形態
                </th>
                <td class="px-6 py-4">
                  <?php echo $resultcompany["contactType"] ?>
                </td>
              </tr>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">オンライン対応の可否
                </th>
                <td class="px-6 py-4">
                  <?php echo $resultcompany["online"] ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
      <!-- パスワード再設定 -->
      <section class="flex justify-center gap-8 align-middle">
        <h2>パスワード再設定</h2>
        <form action="./assets/php/clientList/resetClientPassword.php" method="POST">
          <input type="hidden" name="company_id" value="<?php echo $resultcompany["id"] ?>">
          <input type="hidden" name="company_mail" value="<?php echo $resultcompany["mail"] ?>">
          <button type="submit" name="resetSubmit" id="resetButton" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">生成・再設定</button>
        </form>
      </section>
      <!-- 登録学生情報 -->
      <section>
        <div>
          <h3>登録学生情報</h3>
        </div>
        <div class="w-3/5 text-center">
          <form action="./assets/php/clientList/changeMonth.php" method="POST" class="flex">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">月毎の学生情報を見る</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-48" name="selected_month">
              <option selected>月を選択してください</option>
              <option value="2023/04">2023/04</option>
              <option value="2023/03">2023/03</option>
              <option value="2023/02">2023/02</option>
              <option value="2023/01">2023/01</option>
              <option value="2022/12">2022/12</option>
              <option value="2022/11">2022/11</option>
              <option value="2022/10">2022/10</option>
              <option value="2022/09">2022/09</option>
            </select>
            <input type="hidden" name="company_id" value="<?php echo $resultcompany["id"] ?>">
            <button type="submit" name="changeMonthButton"class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">変更</button>
          </form>
        </div>
        <div>
          <div>総学生数：
            <span><?php print_r($resultCountStudents["totalStudents"]) ?>人</span>
          </div>
          <div>(内無効学生数:
            <span><?php print_r($resultCountStudentsInvalid["totalStudentsInvalid"]) ?>人)</span>
          </div>
        </div>
      </section>
      <!-- 学生情報テーブル -->
      <section>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-5 text-center">
          <h3 class="text-center">企業基本情報</h3>
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                  登録学生氏名
                </th>
                <th scope="col" class="px-6 py-3">
                  学生ID番号
                </th>
                <th scope="col" class="px-6 py-3">
                  登録日時
                </th>
                <th scope="col" class="px-6 py-3">
                  Status
                </th>
                <th scope="col" class="px-6 py-3">
                  詳細へ
                </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($CompaniesStudentsLink as $list) { ?>
                <tr class="border-b border-gray-200 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    <?php echo $list["Name"] ?>
                  </th>
                  <td class="px-6 py-4">
                    <?php echo $list["id"] ?>
                  </td>
                  <td class="px-6 py-4">
                    <?php echo $list["registered_at"] ?>
                  </td>
                  <td class="px-6 py-4">
                    <?php echo $list["status"] ?>
                  </td>
                  <td class="px-6 py-4">
                    <a href="http://localhost:8080/admin/studentDetails.php?id=<?php echo $list["id"] ?>&company_id=<?php echo $list["company_id"]; ?>&status_id=<?php echo $list["status_id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                      <?php echo $list["id"] ?>
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </section>
      <section class="text-center">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 " onclick="goback()">企業一覧へ</button>
      </section>

    </main>
  </div>
  <script>
    function goback() {
      window.location.href = "http://localhost:8080/admin/clientList.php";
      // 企業一覧ページを指定
    }
  </script>
</body>


</html>