const favorites = JSON.parse(localStorage.getItem("favorites")) || [];
console.log(favorites);
// localStorage.clear()
// お気に入り企業の情報をHTMLに書き換え
const service_box = document.getElementById("service-wrapper");

// お気に入り企業の情報をHTMLに書き換え
let str = '';

favorites.forEach((favorite) => {
  const companyName = favorite.name;
  const companyURL = favorite.url;
  const companytime = favorite.time;
  const companyID = favorite.id;

  // お気に入り企業の情報をHTMLに追加
  str += `
  <div class="service-box" id="service_box" ">
  <div class="container">
  <label>
    <input type="checkbox" class="checkbox" name="company_id[]" value="${companyID}">
    <span class="checkbox-fontas"></span>
  </label>
  <div class="s-container">
    <div class="service-name">${companyName}</div>
    <div class="browsing-history">最終閲覧履歴<br>${companytime}</div>
  </div>
</div>
<div class="button-container">
  <a href="${companyURL}" target="_blank">
    <div class="official-page">公式サイト<i class="fa-solid     fa-arrow-up-right-from-square"></i></div>
  </a>
  <a href="clientDetails.php?id=${companyID}">
    <div class="detail-page">詳細ページ<i class="fa-solid     fa-chevron-right"></i></div>
  </a>
</div>
</div>
</div>
</div>`;
});

service_box.innerHTML = str;
// localStorage.clear()

// お気に入り企業がなかった場合の処理
const favoriteAlert = document.getElementById("service-alert");
let favoriteAlertStr = '';
if (favorites.length === 0) {
  favoriteAlertStr += `
  <div class="flex p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">注意</span>
  <div>
    <span class="font-medium">お気に入り登録されてり企業がありません。</span><br>お気に入りしたい企業を検索して登録してみよう！
  </div>
</div>
  `;
}
favoriteAlert.innerHTML = favoriteAlertStr;

// 全ての企業にチェックを入れる
const checks = document.querySelectorAll('.checkbox');
checks.forEach((check)=>{
  check.checked = true;
})

// HTMLのチェックボックスと登録ボタンの要素を取得 
const checkboxes = document.querySelectorAll('input[type="checkbox"]');
const submitButton = document.getElementById('submit-button');
// チェックボックスの状態を監視するためのイベントリスナーを追加
checkboxes.forEach(checkbox => {
  checkbox.addEventListener('change', updateSubmitButtonStatus);
});
// 登録ボタンの活性状態を更新する関数
function updateSubmitButtonStatus() {
  // チェックされていないチェックボックスの数をカウント
  const uncheckedCount = Array.from(checkboxes).filter(checkbox => !checkbox.checked).length;

  // すべてのチェックボックスが外れている場合、登録ボタンを非活性化
  if (uncheckedCount === checkboxes.length) {
    submitButton.disabled = true;
    submitButton.classList.add('disabled');
  } else {
    submitButton.disabled = false;
    submitButton.classList.remove('disabled');
  }
}