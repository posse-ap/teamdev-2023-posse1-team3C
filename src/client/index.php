<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>clientトップページ</title>
</head>
<body>
  <?php include_once('components/link.php') ?>
  <?php include_once('assets/php/index.php') ?>
  <header class="sticky top-20 z-50">
    <h1 class="my-3 mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center" >HOME</h1>
  </header>

<section class="text-gray-600 body-font relative">
  
  <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap w-3/4">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-8">
        <h3 class="text-xl">登録学生情報</h3>
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">月 : </label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected>月を選択してください</option>
          <option value="US">United States</option>
          <option value="CA">Canada</option>
          <option value="FR">France</option>
          <option value="DE">Germany</option>
        </select>
        <button class="my-12  ml-44 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" id="download-btn">CSVダウンロード</button>

        <p class="m-3.5">有効学生数 :  <span><?= $valid ?></span>人（無効学生数 : <span><?= $invalid ?>人<span>)</p>
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
            <tbody>
              <?php foreach ($students as $student)  { ?>
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
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録内容確認</button>
        <button class="bottom-0 ml-4 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lgounded text-lg">お問い合わせ</button>
      </div>
    </div>
  </div>
</section>



<script src="assets/scripts/index.js"></script>

</body>
</html>