<?php 
  session_start();
  if(!isset($_SESSION['unique_id'])){
    header("location: auth/signin.php");
  }
?>

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
  <?php include_once('assets/php/studentDetails.php') ?>
<section class="text-gray-600 body-font relative">
  <div class="container px-3 py-12 mx-auto">
    <div class="flex flex-col text-center w-full mb-2">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">学生詳細情報</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">無効申請は下のボタンをおしてgoogleformから行ってください</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
        
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    登録学生氏名
                </th>
                <td class="px-6 py-4">
                    <?= $result['name'] ?>
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ふりがな
                </th>
                <td class="px-6 py-4">
                  <?= $result['furigana'] ?>
                </td>

            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    性別
                </th>
                <td class="px-6 py-4">
                  <?= $result['sex'] ?>
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    大学
                </th>
                <td class="px-6 py-4">
                  <?= $result['university'] ?>
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    学部・学科
                </th>
                <td class="px-6 py-4">
                  <?= $result['faculty'].$result['department'] ?>
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    卒業年度
                </th>
                <td class="px-6 py-4">
                  <?= $result['graduated_year'] ?>
                </td>

            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    住まいの都道府県
                </th>
                <td class="px-6 py-4">
                  <?= $result['prefecture'] ?>
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    電話番号
                </th>
                <td class="px-6 py-4">
                  <?= $result['phoneNumber'] ?>
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    メールアドレス
                </th>
                <td class="px-6 py-4">
                  <?= $result['email'] ?>
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ステータス
                </th>
                <td class="px-6 py-4">
                  <?= $result['status'] ?>
                </td>
            </tr>
        </tbody>
    </table>





        <div class="p-2 w-full flex">
        <a href="../client/index.php"><button class="my-12  mx-4 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">戻る</button></a>
        <button class="my-12  ml-44 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">無効申請フォームはこちら</button>
          
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
