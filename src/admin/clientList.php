<?php include('../dbconnect.php') ?>
<?php include('./assets/php/clientList/clientList.php') ?>
<!-- head読み込み -->
<?php
include(dirname(__FILE__) . '/components/head.php');
?>
<title>admin画面企業一覧ページ</title>
<?php include(dirname(__FILE__) . '/components/link.php')?>
<link rel="stylesheet" href="./assets/styles/clientList/clientList.css">
</head>

<body>
  <!-- header読み込み -->
  <?php include(dirname(__FILE__) . '/components/header.php'); ?>
  <div class="wrapper">
    <!-- sidebar読み込み -->
    <?php include(dirname(__FILE__) . '/components/sidebar.php'); ?>
    <main class="pt-20">
      <!-- 掲載期間中の企業表 -->
      <div class="relative overflow-x-auto mb-5">
        <h3 class="w-4/5 text-center page-title">掲載中</h3>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 client-info-table">
          <thead class="text-xs text-gray-700 uppercase dark:text-gray-400 client-info-table-title">
            <tr>
              <th scope="col" class="px-6 py-3">
                企業名
              </th>
              <th scope="col" class="px-6 py-3">
                掲載期間終了日
              </th>
              <th scope="col" class="px-6 py-3">
                詳細ボタン
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($companiesUnfinish as $company) { ?>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-white dark:text-white dark:bg-gray-800">
                  <?php echo $company["Company"]; ?>
                </th>
                <td class="px-6 py-4 bg-white">
                  <?php echo $company["finished_at"]; ?>
                </td>
                <td class="px-6 py-4 bg-white">
                  <a href="clientDetails.php?id=<?php echo $company["id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    詳細
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- 掲載期間終了した企業表 -->
      <div class="relative overflow-x-auto mb-5 text-center">
        <h3 class="w-4/5 text-center page-title">掲載終了企業</h3>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 client-info-table">
          <thead class="text-xs text-gray-700 uppercase dark:text-gray-400 client-info-table-title">
            <tr>
              <th scope="col" class="px-6 py-3">
                企業名
              </th>
              <th scope="col" class="px-6 py-3 ">
                掲載期間終了日
              </th>
              <th scope="col" class="px-6 py-3">
                詳細ボタン
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($companiesFinish as $company) { ?>
              <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-white dark:text-white dark:bg-gray-800">
                  <?php echo $company["Company"]; ?>
                </th>
                <td class="px-6 py-4 bg-white">
                  <?php echo $company["finished_at"]; ?>
                </td>
                <td class="px-6 py-4 bg-white">
                  <a href="clientDetails.php?id=<?php echo $company["id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    詳細
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>


</html>