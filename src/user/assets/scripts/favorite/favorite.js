const favorites = JSON.parse(localStorage.getItem("favorites")) || [];

// お気に入り企業の情報をHTMLに書き換え
const service_box = document.getElementById("service-wrapper");

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


const checks = document.querySelectorAll('.checkbox');
checks.forEach((check)=>{
  check.checked = true;
})