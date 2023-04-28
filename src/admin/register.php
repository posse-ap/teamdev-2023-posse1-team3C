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
    <main class="pt-20 max-w-4xl">
      <h3 class="w-4/5 text-center">企業登録</h3>
      <form action="./assets/php/register/register.php" method="POST" class="w-4/5 " enctype="multipart/form-data">
        <!-- 基本情報登録 -->
        <section class="mx-4">
          <div class="mb-6">
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">企業名</label>
            <input type="text" id="company" name="company" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-6">
            <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">エージェントサービス名</label>
            <input type="text" id="service" name="service" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-6">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">本社所在地郵便番号(ハイフン無し)</label>
            <input type="text" id="address" name="address" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-6">
            <label for="phoneNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">連絡用電話番号（ハイフン無し）</label>
            <input type="text" id="phoneNumber" name="phoneNumber" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-6">
            <label for="mail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">連絡用メールアドレス</label>
            <input type="email" name="mail" id="mail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="sample@gmail.com" required>
          </div>
          <div class="mb-6">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">営業時間</label>
            <input type="text" id="date" name="date" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-6">
            <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">公式サイトURL</label>
            <input type="text" id="url" name="url" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-6">
            <label for="contactType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">登録学生とのコンタクト形態</label>
            <select id="contactType" name="contactType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected></option>
              <option value="オンライン">オンライン</option>
              <option value="対面">対面</option>
              <option value="オンライン・対面">オンライン・対面</option>
            </select>
          </div>
          <div class="mb-6">
            <label for="online" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">オンライン対応</label>
            <select id="online" name="online" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected></option>
              <option value="終日対応可">終日対応可</option>
              <option value="平日のみ">平日のみ</option>
            </select>
          </div>
        </section>
        <!-- 掲載情報登録 -->
        <section>
          <h3>掲載情報登録</h3>
          <div>
            <h4>企業宣材写真</h4>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
              <input name="heroImage" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" >
            </div>
          </div>
          <div>
            <h4>星評価(0~5で評価)</h4>
            <div class="flex gap-5 justify-end">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">求人数</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="people">
                <option selected></option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">サポート力</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="support">
                <option selected></option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">内定獲得実績</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="achievement">
                <option selected></option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">内定速度</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="speed">
                <option selected></option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div>
            <div class="flex gap-5 justify-end">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">業界の多さ</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="amount">
                <option selected></option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div>
          </div>
        </section>
        <!-- 登録ボタン -->
        <section class="mx-4">
          <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
              <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
            </div>
            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">誤りが無いことを確認しました。</label>
          </div>
          <button type="submit" name="registerButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </section>
      </form>
    </main>
  </div>
</body>


</html>