<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
  header("location: auth/signin.php");
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include_once('components/link.php') ?>
  <title>clientトップページ</title>
</head>

<body>

  <?php include_once('assets/php/index.php') ?>
  <header class="sticky top-0 z-50 bg-white mt-4">
    <h1 class=" mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center columns-1">HOME</h1>
    <div class="flex justify-center">
      <p class='my-1 mb-4 text-xl text-gray-900 text-center'>ようこそ。<?php echo $company ?>様。こちらでは学生情報を確認、CSVダウンロードを行うことができます。</p>
      <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2  dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 columns-1 ml-24 mb-4" id="logoutButton" action="auth/signout.php" method="GET">ログアウト</button>
    </div>
  </header>

  <section class="text-gray-600 body-font relative">

    <div class="container px-5 py-2 mx-auto flex sm:flex-nowrap flex-wrap w-4/5">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-8">
        <div class="flex">
          <h3 class="text-xl">登録学生情報</h3>

          <form action="">
            <input type="hidden" name="company_id" value="<?php echo $_SESSION["unique_id"] ?>" id="input">
            <button type="submit" class="ml-20 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" id="download-btn">CSVダウンロード</button>
          </form>
        </div>
        <form method="post" action="#">
          <!-- input fields and select element here -->
          <label for="month" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">月 : </label>
          <select id="month" name="month" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="20" selected>月を選択してください</option>
            <option value="2">全ての月を選択する</option>
            <option value="2023-09">2023/09</option>
            <option value="2023-08">2023/08</option>
            <option value="2023-07">2023/07</option>
            <option value="2023-06">2023/6</option>
            <option value="2023-05">2023/5</option>
            <option value="2023-04">2023/4</option>
            <option value="2023-03">2023/3</option>
            <option value="2023-02">2023/2</option>
            <option value="2023-01">2023/1</option>
            <option value="2022-12">2022/12</option>
            <option value="2022-11">2022/11</option>
            <option value="2022-10">2022/10</option>
          </select>
          <input type="submit" value="Submit" id="month-btn">
        </form>

        <p class="m-3.5">有効学生数 : <span class="text-4xl"><?php print_r($valid["count(stu.id)"]) ?></span>人（無効学生数 : <span class="text-4xl"> <?php print_r($invalid["count(stu.id)"]) ?> </span> 人)</p>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3">
                登録学生氏名
              </th>
              <th scope="col" class="px-6 py-3">
                登録日時
              </th>
              <th scope="col" class="px-6 py-3">
                ステータス
              </th>
              <th scope="col" class="px-6 py-3">
                学生詳細
              </th>
            </tr>
          </thead>
          <tbody id="tbody">
            <?php foreach ($students as $student) { ?>
              <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  <?= $student['name'] ?>
                </th>
                <td class="px-6 py-4">
                  <?= $student['registered_at'] ?>
                </td>
                <td class="px-6 py-4">
                  <?= $student['status'] ?>
                </td>
                <td class="px-6 py-4">
                  <a href="studentDetails.php?id=<?= $student['id'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">詳細</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

      <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-1/4 md:py-8 mt-8 md:mt-0 ">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font flex justify-center my-3.5">登録内容の確認、お問い合わせは<br>以下のボタンから確認いただけます</h2>
        <div class="flex justify-center my-7">
          <a href="http://localhost:8080/user/clientDetails.php?id=<?php echo $_SESSION["unique_id"] ?>" target="_blank">
            <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録内容確認</button></a>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLScK_Y69STQGpeKfAcHh1zNIb6tiVVO-2ryhKq2UdzpDbIihJw/viewform" target="_blank"><button class="bottom-0 ml-4 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lgounded text-lg">お問い合わせ</button></a>
        </div>
      </div>
    </div>
  </section>



  <script src="assets/scripts/index.js"></script>

</body>

</html>