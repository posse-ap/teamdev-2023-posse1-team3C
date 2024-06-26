<?php include_once('./components/sessionLogout.php')?>
<?php
include(dirname(__FILE__) . '/components/head.php');
?>
<?php include('../dbconnect.php') ?>
<?php include('./assets/php/clientList/studentDetails.php') ?>
<title>admin画面学生詳細情報ページ</title>
<?php include(dirname(__FILE__) . '/components/link.php')?>
<link rel="stylesheet" href="../admin/assets/styles/studentDetails/studentDetails.css">
</head>

<body>
  <!-- header読み込み -->
  <?php include(dirname(__FILE__) . '/components/header.php'); ?>
  <div class="wrapper">
    <!-- sidebar読み込み -->
    <?php include(dirname(__FILE__) . '/components/sidebar.php'); ?>
    <main class="pt-20">
      <h2 class="w-4/5 text-center page-title">学生詳細情報</h2>
      <div class="relative overflow-x-auto student-info-container">
        <!-- 学生詳細情報テーブル -->
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 student-info-table">
          <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                登録学生氏名
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["Name"]; ?>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                ふりがな
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["furigana"]; ?>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                性別
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["sex"]; ?>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                大学
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["university"]; ?>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                学部学科
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["faculty"] . $resultStudentDetails["department"]; ?>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                卒業年度
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["graduated_year"]; ?>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                住まいの都道府県
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["prefecture"]; ?>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                電話番号
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["phoneNumber"]; ?>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                メールアドレス
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["email"]; ?>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                Status
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["status"]; ?>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                学生ID番号
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["student_id"]; ?>
              </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800 student-info-table-title">
                登録企業名
              </th>
              <td class="px-6 py-4 bg-white">
                <?php echo $resultStudentDetails["company"]; ?>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- ボタン -->
        <section class="flex justify-center gap-10 btn-list">
          <!-- 無効ボタン -->
          <div>
            <form action="./assets/php/clientList/changeStudentInvalid.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $resultStudentDetails["id"] ?>">
              <input type="hidden" name="company_id" value="<?php echo $resultStudentDetails["company_id"] ?>">
              <input type="hidden" name="student_id" value="<?php echo $resultStudentDetails["student_id"] ?>">
              <button type="submit" name="invalidSubmit" id="invalidButton" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">無効</button>
            </form>
          </div>
          <!-- 戻るボタン -->
          <div class="gap-6 flex justify-center">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 " onclick="redirectToClientList()">企業詳細へ</button>
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 " onclick="redirectToIndex()">学生一覧へ</button>
          </div>
        </section>
      </div>
    </main>
  </div>
  <script>
    // 企業詳細ページに戻る
    function redirectToClientList() {
      window.location.href = "http://localhost:8080/admin/clientDetails.php?id=<?php echo $resultStudentDetails["company_id"]?>";
    }
    // 学生一覧に戻る
    function redirectToIndex() {
      window.location.href = "http://localhost:8080/admin/index.php";
    }
  </script>
</body>


</html>