<?php include_once('./components/sessionLogout.php')?>
<?php
include(dirname(__FILE__) . '/components/head.php');
?>
<title>admin画面企業登録ページ</title>
<?php include(dirname(__FILE__) . '/components/link.php') ?>
<link rel="stylesheet" href="./assets/styles/register/register.css">
</head>

<body>
  <!-- header読み込み -->
  <?php include(dirname(__FILE__) . '/components/header.php'); ?>
  <div class="wrapper">
    <!-- sidebar読み込み -->
    <?php include(dirname(__FILE__) . '/components/sidebar.php'); ?>
    <main class="pt-20">
      <h3 class="w-4/5 text-center page-title">企業登録</h3>
      <h4 class="w-4/5 text-center">基本情報登録</h4>
      <form action="./assets/php/register/register.php" method="POST" enctype="multipart/form-data">
        <!-- 基本情報登録 -->
        <section class="mx-4 basic-info">
          <div class="mb-6">
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">企業名</label>
            <input type="text" id="company" name="company" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="required">
          </div>
          <div class="mb-6">
            <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">エージェントサービス名</label>
            <input type="text" id="service" name="service" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="required">
          </div>
          <div class="mb-6">
            <label for="postcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">本社所在地郵便番号</label>
            <input type="text" id="postcode" name="postcode" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="required">
          </div>
          <div class="mb-6">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">本社所在地住所</label>
            <input type="text" id="address" name="address" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="required">
          </div>
          <div class="mb-6">
            <label for="phoneNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">連絡用電話番号</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="required">
          </div>
          <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">連絡用メールアドレス</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="sample@gmail.com" required="required" pattern=".+\.[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]">
          </div>
          <div class="mb-6">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">営業時間</label>
            <input type="text" id="date" name="date" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="required">
          </div>
          <div class="mb-6">
            <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">公式サイトURL</label>
            <input type="url" id="url" name="url" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="required" pattern="https://.*">
          </div>
          <div class="mb-6">
            <label for="contactType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">登録学生とのコンタクト形態</label>
            <select id="contactType" name="contactType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="required">
              <option selected></option>
              <option value="オンライン">オンライン</option>
              <option value="対面">対面</option>
              <option value="オンライン・対面">オンライン・対面</option>
            </select>
          </div>
          <div class="mb-6">
            <label for="online" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">オンライン対応</label>
            <select id="online" name="online" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="required">
              <option selected></option>
              <option value="終日対応可">終日対応可</option>
              <option value="平日のみ">平日のみ</option>
            </select>
          </div>
          <div date-rangepicker class="flex items-center">
            <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="掲載開始日" required="required">
            </div>
            <span class="mx-4 text-gray-500">to</span>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="掲載終了日" required="required">
            </div>
          </div>
        </section>
        <!-- 掲載情報登録 -->
        <h4 class="w-4/5 text-center info-site-title">掲載情報登録</h4>
        <section class="info-site">
          <!-- ヒーロー画像 -->
          <div>
            <h5>企業宣材写真</h5>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">写真を選択してください(2MG以下)</label>
              <input name="heroImage" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 upload-limit" id="file_input" type="file" required="required" accept="image/png, image/jpeg">
            </div>
          </div>
          <!-- 星評価 -->
          <div class="star-container">
            <h5>星評価(0~5で評価)</h5>
            <div class="flex gap-5 justify-end star-content">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white star-title">求人数</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="peopleRate" required="required">
                <option selected></option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end star-content">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white star-title">サポート力</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="supportRate" required="required">
                <option selected></option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end star-content">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white star-title">内定獲得実績</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="achievementRate" required="required">
                <option selected></option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end star-content">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white star-title">内定速度</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="speedRate" required="required">
                <option selected></option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end star-content">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white star-title">業界の多さ</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="amountRate" required="required">
                <option selected></option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div>
          </div>
          <!-- 詳細情報 -->
          <h5 class="w-4/5">詳細情報</h5>
          <div>
            <div class="mb-6">
              <label for="formType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">お問い合わせ形態</label>
              <input type="text" id="formType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="formType" required="required">
            </div>
            <div class="mb-6">
              <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">総合型/特化型</label>
              <input type="text" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="type" required="required">
            </div>
            <div class="mb-6">
              <label for="achievement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">内定獲得実績</label>
              <input type="text" id="achievement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="achievement" required="required">
            </div>
            <div class="mb-6">
              <label for="people" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">求人数</label>
              <input type="text" id="people" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="people" required="required">
            </div>
            <div class="mb-6">
              <label for="scale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">対応企業の規模</label>
              <input type="text" id="scale" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="scale" required="required">
            </div>
            <div class="mb-6">
              <label for="search" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">業界研究</label>
              <input type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="search" required="required">
            </div>
            <div class="flex gap-5 justify-end info-details-content">
              <label for="ES" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white info-details-title">ES添削</label>
              <select id="ES" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 info-details-input" name="ES" required="required">
                <option selected></option>
                <option value="あり">あり</option>
                <option value="なし">なし</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end info-details-content">
              <label for="practice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white info-details-title">面接練習</label>
              <select id="practice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 info-details-input" name="practice" required="required">
                <option selected></option>
                <option value="あり">あり</option>
                <option value="なし">なし</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end info-details-content">
              <label for="seminar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white info-details-title">セミナー・企業説明会</label>
              <select id="seminar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 info-details-input" name="seminar" required="required">
                <option selected></option>
                <option value="あり">あり</option>
                <option value="なし">なし</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end info-details-content">
              <label for="community" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white info-details-title">就活コミュニティ</label>
              <select id="community" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 info-details-input" name="community" required="required">
                <option selected></option>
                <option value="あり">あり</option>
                <option value="なし">なし</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end info-details-content">
              <label for="specialChoose" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white info-details-title">特別選考</label>
              <select id="specialChoose" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 info-details-input" name="specialChoose" required="required">
                <option selected></option>
                <option value="あり">あり</option>
                <option value="なし">なし</option>
              </select>
            </div>
            <div class="mb-6 support-container">
              <label for="supportType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">サポート形態</label>
              <input type="text" id="supportType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="supportType" required="required">
            </div>
            <div class="area-container">
              <div class="area-container-title">
                対応地域
              </div>
              <div class="area-list">
                <ul class="sm:flex area-list-1">
                  <li class="w-full area-list-1-item">
                    <div class="flex items-center pl-3">
                      <input id="hokkaidou" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="1" name="Areas[]">
                      <label for="hokkaidou" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">北海道</label>
                    </div>
                  </li>
                  <li class="w-full area-list-1-item">
                    <div class="flex items-center pl-3">
                      <input id="touhoku" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="2" name="Areas[]">
                      <label for="touhoku" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">東北</label>
                    </div>
                  </li>
                  <li class="w-full area-list-1-item">
                    <div class="flex items-center pl-3">
                      <input id="kantou" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="3" name="Areas[]">
                      <label for="kantou" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">関東</label>
                    </div>
                  </li>
                  <li class="w-full area-list-1-item">
                    <div class="flex items-center pl-3">
                      <input id="chuubu" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="4" name="Areas[]">
                      <label for="chuubu" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">中部</label>
                    </div>
                  </li>
                </ul>
                <ul class="sm:flex area-list-2">
                  <li class="w-full area-list-2-item">
                    <div class="flex items-center pl-3">
                      <input id="kinki" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="5" name="Areas[]">
                      <label for="kinki" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">近畿</label>
                    </div>
                  </li>
                  <li class="w-full area-list-2-item">
                    <div class="flex items-center pl-3">
                      <input id="chuugoku" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="6" name="Areas[]">
                      <label for="chuugoku" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">中国</label>
                    </div>
                  </li>
                  <li class="w-full area-list-2-item">
                    <div class="flex items-center pl-3">
                      <input id="sikoku" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="7" name="Areas[]">
                      <label for="sikoku" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">四国</label>
                    </div>
                  </li>
                  <li class="w-full area-list-2-item">
                    <div class="flex items-center pl-3">
                      <input id="kyuusyuu" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="8" name="Areas[]">
                      <label for="kyuusyuu" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">九州</label>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="mb-6">
              <label for="Date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">対応可能時間</label>
              <input type="text" id="Date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Date" required="required">
            </div>
            <div class="year-container">
              <div class="year-container-title">
                対応卒業年度
              </div>
              <ul class="sm:flex year-list">
                <li class="w-full year-list-item">
                  <div class="flex items-center pl-3">
                    <input id="24" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="1" name="graduated_years[]">
                    <label for="24" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">24卒</label>
                  </div>
                </li>
                <li class="w-full year-list-item">
                  <div class="flex items-center pl-3">
                    <input id="25" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="2" name="graduated_years[]">
                    <label for="25" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">25卒</label>
                  </div>
                </li>
                <li class="w-full year-list-item">
                  <div class="flex items-center pl-3">
                    <input id="26" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="3" name="graduated_years[]">
                    <label for="26" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">26卒</label>
                  </div>
                </li>
                <li class="w-full year-list-item">
                  <div class="flex items-center pl-3">
                    <input id="27" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" value="4" name="graduated_years[]">
                    <label for="27" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">27卒</label>
                  </div>
                </li>
              </ul>
            </div>
            <div>
              <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">詳細説明</label>
              <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." name="description" required="required"></textarea>
            </div>
          </div>
          <!-- サクセスストーリー -->
          <div>
            <h5>サクセスストーリー</h5>
            <h6>1人目</h6>
            <div class="mb-8">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content" for="successFirst">写真を選択してください(2MG以下)</label>
              <input name="successFirstImage" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 upload-limit" id="successFirst" type="file" required="required" accept="image/png, image/jpeg">
              <label for="successFirstTime" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">内定までにかかった時間</label>
              <input type="text" id="successFirstTime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successFirstTime" required="required">
              <label for="successFirstUniversity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">大学名</label>
              <input type="text" id="successFirstUniversity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successFirstUniversity" required="required">
              <label for="successFirstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">名前</label>
              <input type="text" id="successFirstName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successFirstName" required="required">
              <label for="successFirstTitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">見出し</label>
              <input type="text" id="successFirstTitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successFirstTitle" required="required">
              <label for="successFirstStory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">詳細説明</label>
              <textarea id="successFirstStory" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." name="successFirstStory" required="required"></textarea>
            </div>
            <h6>2人目</h6>
            <div class="mb-8">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content" for="successSecond">写真を選択してください(2MG以下)</label>
              <input name="successSecondImage" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 upload-limit" id="successSecond" type="file" required="required" accept="image/png, image/jpeg">
              <label for="successSecondTime" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">内定までにかかった時間</label>
              <input type="text" id="successSecondTime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successSecondTime" required="required">
              <label for="successSecondUniversity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">大学名</label>
              <input type="text" id="successSecondUniversity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successSecondUniversity" required="required">
              <label for="successSecondName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">名前</label>
              <input type="text" id="successSecondName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successSecondName" required="required">
              <label for="successSecondTitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">見出し</label>
              <input type="text" id="successSecondTitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successSecondTitle" required="required">
              <label for="successSecondStory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">詳細説明</label>
              <textarea id="successSecondStory" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." name="successSecondStory" required="required"></textarea>
            </div>
            <h6>3人目</h6>
            <div class="mb-8">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content success-content" for="successThird">写真を選択してください(2MG以下)</label>
              <input name="successThirdImage" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 upload-limit" id="successThird" type="file" required="required" accept="image/png, image/jpeg">
              <label for="successThirdTime" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">内定までにかかった時間</label>
              <input type="text" id="successThirdTime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successThirdTime" required="required">
              <label for="successThirdUniversity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">大学名</label>
              <input type="text" id="successThirdUniversity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successThirdUniversity" required="required">
              <label for="successThirdName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">名前</label>
              <input type="text" id="successThirdName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successThirdName" required="required">
              <label for="successThirdTitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">見出し</label>
              <input type="text" id="successThirdTitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="successThirdTitle" required="required">
              <label for="successThirdStory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white success-content">詳細説明</label>
              <textarea id="successThirdStory" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." name="successThirdStory" required="required"></textarea>
            </div>
          </div>
          <!-- 推しポイント -->
          <div>
            <h5>推しポイント</h5>
            <div class="mb-6">
              <label for="goodPointFirst" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">推しポイント1</label>
              <input type="text" id="goodPointFirst" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="goodPoints[]" required="required">
            </div>
            <div class="mb-6">
              <label for="goodPointSecond" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">推しポイント2</label>
              <input type="text" id="goodPointSecond" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="goodPoints[]" required="required">
            </div>
            <div class="mb-6">
              <label for="goodPointThird" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">推しポイント3</label>
              <input type="text" id="goodPointThird" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="goodPoints[]" required="required">
            </div>
          </div>
        </section>
        <section>
          <div class="search">
            <div class="search-title">
              <i class="fa-regular fa-tag"></i>
              <h3>基本情報</h3>
            </div>
            <div class="graduate">
              <h4>卒業年度</h4>
              <div class="graduate-wrapper">
                <ul class="g-box">
                  <li class="g-box-item">
                    <label for="g-box-item-1">
                      <input type="checkbox" name="graduate[]" id="g-box-item-1" class="checkbox" value="1" type-data="s-graduated">
                      <span class="checkbox-fontas checkbox-fontas-1"></span>
                      25卒
                    </label>
                  </li>
                  <li class="g-box-item">
                    <label for="g-box-item-2">
                      <input type="checkbox" name="graduate[]" id="g-box-item-2" class="checkbox" value="2" type-data="s-graduated">
                      <span class="checkbox-fontas checkbox-fontas-2"></span>
                      26卒
                    </label>
                  </li>
                  <li class="g-box-item">
                    <label for="g-box-item-3">
                      <input type="checkbox" name="graduate[]" id="g-box-item-3" class="checkbox" value="3" type-data="s-graduated">
                      <span class="checkbox-fontas checkbox-fontas-3"></span>
                      27卒
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="support">
              <h4>サポート形態</h4>
              <div class="support-wrapper">
                <ul class="s-box">
                  <li class="s-box-item">
                    <label for="s-box-item-1">
                      <input type="checkbox" name="support" id="s-box-item-1" class="checkbox" value="4" type-data="s-support">
                      <span class="checkbox-fontas checkbox-fontas-4"></span>
                      オンラインのみ
                    </label>
                  </li>
                  <li class="s-box-item">
                    <label for="s-box-item-2">
                      <input type="checkbox" name="support" id="s-box-item-2" class="checkbox" value="5" type-data="s-support">
                      <span class="checkbox-fontas checkbox-fontas-5"></span>
                      対面のみ
                    </label>
                  </li>
                  <li class="s-box-item">
                    <label for="s-box-item-3">
                      <input type="checkbox" name="support" id="s-box-item-3" class="checkbox" value="6" type-data="s-support">
                      <span class="checkbox-fontas checkbox-fontas-6"></span>
                      両方可
                    </label>
                </ul>
              </div>
            </div>
            <div class="your-area">
              <h4>対応地域</h4>
              <div class="your-area-wrapper">
                <ul class="y-box">
                  <li class="y-box-item">
                    <label for="y-box-item-1">
                      <input type="checkbox" name="your-area[]" id="y-box-item-1" class="checkbox" value="7" type-data="s-area">
                      <span class="checkbox-fontas checkbox-fontas-7"></span>
                      北海道
                    </label>
                  </li>
                  <li class="y-box-item">
                    <label for="y-box-item-2">
                      <input type="checkbox" name="your-area[]" id="y-box-item-2" class="checkbox" value="8">
                      <span class="checkbox-fontas checkbox-fontas-8"></span>
                      東北
                    </label>
                  </li>
                  <li class="y-box-item">
                    <label for="y-box-item-3">
                      <input type="checkbox" name="your-area[]" id="y-box-item-3" class="checkbox" value="9" type-data="s-area">
                      <span class="checkbox-fontas checkbox-fontas-9"></span>
                      関東
                    </label>
                  </li>
                  <li class="y-box-item">
                    <label for="y-box-item-4">
                      <input type="checkbox" name="your-area[]" id="y-box-item-4" class="checkbox" value="10" type-data="s-area">
                      <span class="checkbox-fontas checkbox-fontas-10"></span>
                      中部
                    </label>
                  </li>
                  <li class="y-box-item">
                    <label for="y-box-item-5">
                      <input type="checkbox" name="your-area[]" id="y-box-item-5" class="checkbox" value="11" type-data="s-area">
                      <span class="checkbox-fontas checkbox-fontas-11"></span>
                      近畿
                    </label>
                  </li>
                  <li class="y-box-item">
                    <label for="y-box-item-6">
                      <input type="checkbox" name="your-area[]" id="y-box-item-6" class="checkbox" value="12" type-data="s-area">
                      <span class="checkbox-fontas checkbox-fontas-12"></span>
                      中国
                    </label>
                  </li>
                  <li class="y-box-item">
                    <label for="y-box-item-7">
                      <input type="checkbox" name="your-area[]" id="y-box-item-7" class="checkbox" value="13" type-data="s-area">
                      <span class="checkbox-fontas checkbox-fontas-13"></span>
                      四国
                    </label>
                  </li>
                  <li class="y-box-item">
                    <label for="y-box-item-8">
                      <input type="checkbox" name="your-area[]" id="y-box-item-8" class="checkbox" value="14" type-data="s-area">
                      <span class="checkbox-fontas checkbox-fontas-14"></span>
                      九州
                    </label>
                  </li>
                </ul>
              </div>
            </div>

          </div>
          <div class="search-details">
            <div class="search-details-title">
              <p class="search-details-title-content">
                詳細絞りこみはコチラ
              </p>
              <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="search-details-contents">
              <div class="agent-type">
                <div class="agent-type-comprehensive">
                  <h5>総合型</h5>
                  <div class="agent-type-comprehensive-content">
                    <label for="agent-type-1">
                      <input type="checkbox" name="agent-type[]" id="agent-type-1" class="checkbox" value="15">
                      <span class="checkbox-fontas"></span>
                      総合型
                    </label>
                  </div>
                </div>
                <h5 class="agent-type-title">特化型</h5>
                <div class="agent-type-wrapper">
                  <ul class="a-box">
                    <li class="a-box-item">
                      <label for="agent-type-2">
                        <input type="checkbox" name="agent-type[]" id="agent-type-2" class="checkbox" value="16">
                        <span class="checkbox-fontas"></span>
                        営業
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-3">
                        <input type="checkbox" name="agent-type[]" id="agent-type-3" class="checkbox" value="17">
                        <span class="checkbox-fontas"></span>
                        事務/アシスタント
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-4">
                        <input type="checkbox" name="agent-type[]" id="agent-type-4" class="checkbox" value="18">
                        <span class="checkbox-fontas"></span>
                        企画/マーケティング
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-5">
                        <input type="checkbox" name="agent-type[]" id="agent-type-5" class="checkbox" value="19">
                        <span class="checkbox-fontas"></span>
                        販売/サービス
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-6">
                        <input type="checkbox" name="agent-type[]" id="agent-type-6" class="checkbox" value="20">
                        <span class="checkbox-fontas"></span>
                        IT/通信系エンジニア
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-7">
                        <input type="checkbox" name="agent-type[]" id="agent-type-7" class="checkbox" value="21">
                        <span class="checkbox-fontas"></span>
                        建築/土木系エンジニア
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-8">
                        <input type="checkbox" name="agent-type[]" id="agent-type-8" class="checkbox" value="22">
                        <span class="checkbox-fontas"></span>
                        モノづくり系エンジニア
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-9">
                        <input type="checkbox" name="agent-type[]" id="agent-type-9" class="checkbox" value="23">
                        <span class="checkbox-fontas"></span>
                        素材/化学/食品系エンジニア
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-10">
                        <input type="checkbox" name="agent-type[]" id="agent-type-10" class="checkbox" value="24">
                        <span class="checkbox-fontas"></span>
                        医療系専門職
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-11">
                        <input type="checkbox" name="agent-type[]" id="agent-type-11" class="checkbox" value="25">
                        <span class="checkbox-fontas"></span>
                        金融系専門職
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-12">
                        <input type="checkbox" name="agent-type[]" id="agent-type-12" class="checkbox" value="26">
                        <span class="checkbox-fontas"></span>
                        コンサルタント/不動産専門職
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-13">
                        <input type="checkbox" name="agent-type[]" id="agent-type-13" class="checkbox" value="27">
                        <span class="checkbox-fontas"></span>
                        クリエイティブ
                      </label>
                    </li>
                  </ul>
                </div>
                <h5 class="agent-type-title">対応可能日時</h5>
                <div class="agent-type-wrapper">
                  <ul class="a-box">
                    <li class="a-box-item">
                      <label for="agent-type-14">
                        <input type="checkbox" name="agent-type[]" id="agent-type-14" class="checkbox" value="28">
                        <span class="checkbox-fontas"></span>
                        土・日・祝日対応可
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-15">
                        <input type="checkbox" name="agent-type[]" id="agent-type-15" class="checkbox" value="29">
                        <span class="checkbox-fontas"></span>
                        平日18時まで対応可
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-16">
                        <input type="checkbox" name="agent-type[]" id="agent-type-16" class="checkbox" value="30">
                        <span class="checkbox-fontas"></span>
                        平日22時まで対応可
                      </label>
                    </li>
                  </ul>
                </div>
                <h5 class="agent-type-title">企業規模</h5>
                <div class="agent-type-wrapper">
                  <ul class="a-box">
                    <li class="a-box-item">
                      <label for="agent-type-17">
                        <input type="checkbox" name="agent-type[]" id="agent-type-17" class="checkbox" value="31">
                        <span class="checkbox-fontas"></span>
                        ベンチャー
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-18">
                        <input type="checkbox" name="agent-type[]" id="agent-type-18" class="checkbox" value="32">
                        <span class="checkbox-fontas"></span>
                        大手
                      </label>
                    </li>
                  </ul>
                </div>
                <h5 class="agent-type-title">文系・理系</h5>
                <div class="agent-type-wrapper">
                  <ul class="a-box">
                    <li class="a-box-item">
                      <label for="agent-type-19">
                        <input type="checkbox" name="agent-type[]" id="agent-type-19" class="checkbox" value="33">
                        <span class="checkbox-fontas"></span>
                        文系
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-20">
                        <input type="checkbox" name="agent-type[]" id="agent-type-20" class="checkbox" value="34">
                        <span class="checkbox-fontas"></span>
                        理系
                      </label>
                    </li>
                  </ul>
                </div>
                <h5 class="agent-type-title">特徴</h5>
                <div class="agent-type-wrapper">
                  <ul class="a-box">
                    <li class="a-box-item">
                      <label for="agent-type-21">
                        <input type="checkbox" name="agent-type[]" id="agent-type-21" class="checkbox" value="35">
                        <span class="checkbox-fontas"></span>
                        就活コミュニティあり
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-22">
                        <input type="checkbox" name="agent-type[]" id="agent-type-22" class="checkbox" value="36">
                        <span class="checkbox-fontas"></span>
                        業界研究あり
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-23">
                        <input type="checkbox" name="agent-type[]" id="agent-type-23" class="checkbox" value="37">
                        <span class="checkbox-fontas"></span>
                        インターンシップ紹介あり
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-24">
                        <input type="checkbox" name="agent-type[]" id="agent-type-24" class="checkbox" value="38">
                        <span class="checkbox-fontas"></span>
                        説明会あり
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-25">
                        <input type="checkbox" name="agent-type[]" id="agent-type-25" class="checkbox" value="39">
                        <span class="checkbox-fontas"></span>
                        面接練習あり
                      </label>
                    </li>
                    <li class="a-box-item">
                      <label for="agent-type-26">
                        <input type="checkbox" name="agent-type[]" id="agent-type-26" class="checkbox" value="40">
                        <span class="checkbox-fontas"></span>
                        ES添削あり
                      </label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- 登録ボタン -->
        <section class="mx-4 btn-register">
          <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
              <input id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="required">
              <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">誤りが無いことを確認しました。</label>
              <button type="submit" name="registerButton" class="inactive text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 registerButton inactive">送信</button>
            </div>
          </div>
        </section>
      </form>
    </main>
  </div>
</body>


</html>