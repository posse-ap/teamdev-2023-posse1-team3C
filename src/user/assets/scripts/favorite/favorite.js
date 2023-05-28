const favorites = JSON.parse(localStorage.getItem("favorites")) || [];
favorites.sort((a, b) => new Date(b.time) - new Date(a.time));
// localStorage.clear()
// お気に入り企業の情報をHTMLに書き換え
const service_box = document.getElementById("service-wrapper");
// お気に入り企業の情報をHTMLに書き換え
let str = "";

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
    <div class="check-container">
      <div class="check-1">
        <input type="checkbox" class="checkbox" name="company_id[]" value="${companyID}">
        <span class="checkbox-fontas"></span>
      </div>
      <div class="service-name">${companyName}</div>
    </div>
  </label>
  <div class="s-container">
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

// HTMLのチェックボックスと登録ボタンの要素を取得
const checkboxes = document.querySelectorAll('input[type="checkbox"]');
const submitButton = document.getElementById("submit-button");
// お気に入り企業がなかった場合の処理
const favoriteAlert = document.getElementById("service-alert");
let favoriteAlertStr = "";
if (favorites.length === 0) {
  favoriteAlertStr += `
<div class="alert-area" role="alert">
  <div>
    <i class="fa-solid fa-circle-info info-mark"></i>
    <span>お気に入り登録されている企業がありません。</span><br>お気に入りしたい企業を検索して登録してみよう！
  </div>
</div>
  `;
  submitButton.disabled = true;
  submitButton.classList.add("disabled");
}
favoriteAlert.innerHTML = favoriteAlertStr;

// 全ての企業にチェックを入れる
const checks = document.querySelectorAll(".checkbox");
checks.forEach((check) => {
  check.checked = true;
});

// チェックボックスの状態を監視するためのイベントリスナーを追加
checkboxes.forEach((checkbox) => {
  checkbox.addEventListener("change", updateSubmitButtonStatus);
});
// 登録ボタンの活性状態を更新する関数
function updateSubmitButtonStatus() {
  // チェックされていないチェックボックスの数をカウント
  const uncheckedCount = Array.from(checkboxes).filter(
    (checkbox) => !checkbox.checked
  ).length;
  // すべてのチェックボックスが外れている場合、登録ボタンを非活性化
  if (uncheckedCount === checkboxes.length) {
    submitButton.disabled = true;
    submitButton.classList.add("disabled");
  } else {
    submitButton.disabled = false;
    submitButton.classList.remove("disabled");
  }
}
