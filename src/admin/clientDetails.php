<?php include('../dbconnect.php') ?>
<?php include('./assets/php/clientList/clientDetails.php') ?>

<!-- head読み込み -->
<?php
include(dirname(__FILE__) . '/components/head.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>

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
      <section></section>
      <section></section>
      <section></section>
      <button></button>

    </main>
  </div>
</body>


</html>