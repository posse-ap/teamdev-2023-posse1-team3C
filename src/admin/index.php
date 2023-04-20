<?php include('../dbconnect.php') ?>
<?php include('./assets/php/index.php')?>
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
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3">
                登録学生氏名
              </th>
              <th scope="col" class="px-6 py-3">
                登録企業名
              </th>
              <th scope="col" class="px-6 py-3">
                学生id番号
              </th>
              <th scope="col" class="px-6 py-3">
                登録日時
              </th>
              <th scope="col" class="px-6 py-3">
                Status
              </th>
              <th scope="col" class="px-6 py-3">
                学生詳細
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($CompaniesStudentsLink as $list) { ?>　
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo $list["Name"]?>
              </th>
              <td class="px-6 py-4 al">
              <?php echo $list["company"]?>
              </td>
              <td class="px-6 py-4">
              <?php echo $list["id"]?>
              </td>
              <td class="px-6 py-4">
              <?php echo $list["registered_at"]?>
              </td>
              <td class="px-6 py-4">
              <?php echo $list["status"]?>
              </td>
              <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                <?php echo $list["id"]?>
                </a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>

    </main>
  </div>
</body>


</html>