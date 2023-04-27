<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRAFT 申し込みページ</title>
  <link rel="stylesheet" href="./assets/styles/normalize.css">
  <link rel="stylesheet" href="../dist/output.css">
  <link rel="stylesheet" href="./assets/styles/common.css">
  <link rel="stylesheet" href="./assets/styles/register.css">
</head>
<body>
  <!-- ヘッダー -->
  <?php include_once('components/header.php')?>
  <main>
    <h2 class="register-title">
      学生情報登録
    </h2>
    <div class="register-title-decoration"></div>
    <form>
      <div class="grid gap-6 mb-6 md:grid-cols-2 name-input">
        <div>
          <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">姓</label>
          <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="田中" required>
        </div>
        <div>
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">名</label>
          <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="太郎" required>
        </div>
        <div>
          <label for="last_name_kana" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">姓(カタカナ)</label>
          <input type="text" id="last_name_kana" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="タナカ" required>
        </div>  
        <div>
          <label for="first_name_kana" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">名(カタカナ)</label>
          <input type="text" id="first_name_kana" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="タロウ" required>
        </div>
      </div>
      <div class="sex mb-6">
        <label for="sex" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">性別</label>
        <select id="sex" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected></option>
          <option value="man">男性</option>
          <option value="woman">女性</option>
          <option value="no">未回答</option>
        </select>
      </div>
      <div class="graduate mb-6">
        <label for="graduate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">卒業年度</label>
        <select id="graduate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected></option>
          <option value="25">25卒</option>
          <option value="26">26卒</option>
          <option value="27">27卒</option>
        </select>
      </div>
      <div class="mb-6 university-input">
        <label for="university" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">大学</label>
        <input type="text" id="university" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="慶應義塾大学" required>
      </div>
      <div class="grid gap-6 mb-6 md:grid-cols-2 major-input">
        <div>
          <label for="faculty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">学部</label>
          <input type="text" id="faculty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="経済学部" required>
        </div>
        <div>
          <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">学科</label>
          <input type="text" id="department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="経済学科" required>
        </div>
      </div>
      <div class="prefecture mb-6">
        <label for="prefecture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">お住まいの都道府県</label>
        <select id="prefecture" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected></option>
          <option value="hokkaido">北海道</option>
          <option value="aomori">青森</option>
          <option value="iwate">岩手</option>
          <option value="miyagi">宮城</option>
          <option value="yamagata">山形</option>
          <option value="akita">秋田</option>
          <option value="fukushima">福島</option>
          <option value="tochigi">栃木</option>
          <option value="gunma">群馬</option>
          <option value="saitama">埼玉</option>
          <option value="ibaraki">茨城</option>
          <option value="chiba">千葉</option>
          <option value="tokyo">東京</option>
          <option value="kanagawa">神奈川</option>
          <option value="yamanashi">山梨</option>
          <option value="nagano">長野</option>
          <option value="shizuoka">静岡</option>
          <option value="aichi">愛知</option>
          <option value="gifu">岐阜</option>
          <option value="niigata">新潟</option>
          <option value="toyama">富山</option>
          <option value="ishikawa">石川</option>
          <option value="fukui">福井</option>
          <option value="mie">三重</option>
          <option value="shiga">滋賀</option>
          <option value="kyoto">京都</option>
          <option value="nara">奈良</option>
          <option value="wakayama">和歌山</option>
          <option value="osaka">大阪</option>
          <option value="hyogo">兵庫</option>
          <option value="hiroshima">広島</option>
          <option value="okayama">岡山</option>
          <option value="shimane">島根</option>
          <option value="tottori">鳥取</option>
          <option value="yamaguchi">山口</option>
          <option value="kagawa">香川</option>
          <option value="kochi">高知</option>
          <option value="ehime">愛媛</option>
          <option value="tokushima">徳島</option>
          <option value="fukuoka">福岡</option>
          <option value="saga">佐賀</option>
          <option value="nagasaki">長崎</option>
          <option value="oita">大分</option>
          <option value="kumamoto">熊本</option>
          <option value="miyazaki">宮崎</option>
          <option value="kagoshima">鹿児島</option>
          <option value="okinawa">沖縄</option>
        </select>
      </div>
      <div class="phone-number mb-6">
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">電話番号(ハイフンあり)</label>
        <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="080-1234-5678" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required>
      </div>
      <div class="mb-6 email-input">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">メールアドレス</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="craft@company.com" required>
      </div> 
      <div class="flex items-start mb-6 confirmation">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
        </div>
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">入力された個人情報</a>に間違いはありませんか？</label>
      </div>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 submit-button">
        送信
      </button>
    </form>
  </main>
</body>
</html>