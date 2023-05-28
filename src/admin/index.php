<?php include_once('./components/sessionLogout.php')?>
<?php include('../dbconnect.php') ?>
<?php include('./assets/php/index.php') ?>
<!-- head読み込み -->
<?php
include(dirname(__FILE__) . '/components/head.php');
?>
<title>admin画面トップページ</title>
<?php include(dirname(__FILE__) . '/components/link.php')?>
<link rel="stylesheet" href="../admin/assets/styles/top.css">
</head>

<body>
  <!-- header読み込み -->
  <?php include(dirname(__FILE__) . '/components/header.php'); ?>
  <div class="wrapper">
    <!-- sidebar読み込み -->
    <?php include(dirname(__FILE__) . '/components/sidebar.php'); ?>
    <main class="pt-20">
      <h2 class="w-4/5 text-center page-title">Dashboard</h2>
      <div class="relative overflow-x-auto student-info-container">
        <h3>学生情報一覧</h3>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 student-info-table">
          <thead class="text-xs text-gray-700 uppercase student-info-table-title">
            <tr class="text-center">
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
            <?php foreach ($CompaniesStudentsLink as $list) { ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo $list["Name"] ?>
              </th>
              <td class="px-6 py-4 al">
                <?php echo $list["company"] ?>
              </td>
              <td class="px-6 py-4">
                <?php echo $list["student_id"] ?>
              </td>
              <td class="px-6 py-4">
                <?php echo $list["registered_at"] ?>
              </td>
              <td class="px-6 py-4">
                <?php echo $list["status"] ?>
              </td>
              <td class="px-6 py-4">
                <form action="./assets/php/index.php" method="POST">
                  <input type="hidden" name="student_id" value="<?php echo $list["student_id"] ?>">
                  <input type="hidden" name="company_id" value="<?php echo $list["company_id"]; ?>">
                  <input type="hidden" name="status_id" value="<?php echo $list["status_id"] ?>">
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 student-details-btn" name="studentDetailsButton">学生詳細
                  </button>
                </form>
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