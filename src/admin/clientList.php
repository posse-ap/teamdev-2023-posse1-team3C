<?php include('../dbconnect.php') ?>
<?php include('./assets/php/clientList/clientList.php') ?>
<!-- head読み込み -->
<?php
include(dirname(__FILE__) . '/components/head.php');
?>

</head>

<body class="bg-gray-300">
  <!-- header読み込み -->
  <?php include(dirname(__FILE__) . '/components/header.php'); ?>
  <div class="wrapper">
    <!-- sidebar読み込み -->
    <?php include(dirname(__FILE__) . '/components/sidebar.php'); ?>
    <main class="pt-20">
      <!-- 掲載期間中の企業表 -->
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-5 text-center">
        <h3 class="text-center">掲載中</h3>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
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
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  <?php echo $company["Company"]; ?>
                </th>
                <td class="px-6 py-4">
                  <?php echo $company["finished_at"]; ?>
                </td>
                <td class="px-6 py-4">
                  <a href="http://localhost:8080/admin/clientDetails.php?id=<?php echo $company["id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    <?php echo $company["id"] ?>
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- 掲載期間終了した企業表 -->
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <h3 class="text-center">掲載終了企業</h3>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
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
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  <?php echo $company["Company"]; ?>
                </th>
                <td class="px-6 py-4">
                  <?php echo $company["finished_at"]; ?>
                </td>
                <td class="px-6 py-4">
                  <a href="http://localhost:8080/admin/clientDetails.php?id=<?php echo $company["id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    <?php echo $company["id"] ?>
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