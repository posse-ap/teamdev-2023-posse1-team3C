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
  <div class="service-box" id="service_box">
  <div class="container">
  <label>
    <input type="checkbox" class="checkbox">
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
  <button type="button" class="favorite-btn" value="" id="favoriteButton" data-name="<?= ${company_details["company"]}?>" data-url="<?= ${company_details["URL"]}?>" data-id="<?= ${company_details["id"]}?>" onclick="addToFavorites()">
    <span class="favorite-btn-text">
      お気に入りに追加
    </span>
  </button>
</div>
</div>
</div>
</div>`;
});

service_box.innerHTML = str;

let favorite = document.querySelector('.favorite-btn');
let favoriteText = document.querySelector('.favorite-btn-text');
function addToFavorites() {
  // これ解除すれば中身が初期化するのでわかりやすい
  // localStorage.clear();
  let companyID = favorite.getAttribute('data-id');
  let currentTime = new Date().toLocaleString();
  // ローカルストレージからお気に入り情報を取得
  const favorites = JSON.parse(localStorage.getItem("favorites")) || [];

  if (favorite.value == 0){
  

  

  // 既に同じIDの企業がローカルストレージ内に存在するかチェック
  const existingIndex = favorites.findIndex(item => item.id === companyID);

  if (existingIndex !== -1) {
    // 同じIDの企業が既に登録されている場合は削除
    favorites.splice(existingIndex, 1);
  }

  // 企業の情報（仮のデータ）
  let companyName = favorite.getAttribute('data-name');
  let companyURL = favorite.getAttribute('data-url');

  // お気に入り情報を追加
  favorites.push({ name: companyName, url: companyURL, id: companyID,time: currentTime});

  // ローカルストレージに保存
  localStorage.setItem("favorites", JSON.stringify(favorites));
  }else{
    const existingIndex = favorites.findIndex(item => item.id === companyID);
    favorites.splice(existingIndex, 1);
    localStorage.setItem("favorites", JSON.stringify(favorites));
  }
  
}
// ローカルストレージの中にidが存在しているのかチェックしてお気に入りボタンを変更する。
const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');
console.log(id);
function checkIfIdExists(id) {
  // ローカルストレージからデータを取得
  const favorites = JSON.parse(localStorage.getItem("favorites")) || [];

  // データ内をループしてidの存在をチェック
  for (const item of favorites) {
    if (item.id === id) {
      // 指定したidが存在する場合
      return true;
    }
  }
  // 指定したidが存在しない場合
  return false;
}
const idExists = checkIfIdExists(id);
if (idExists){
  favorite.classList.add('active');
  favoriteText.textContent = 'お気に入り済み';
  favorite.value = 1;
}
// お気に入りボタンを押したら色が変わる、テキストが変更される
favorite.addEventListener('click', function() {
  if (favorite.classList.contains('active')) {
    favorite.classList.remove('active');
    favoriteText.textContent = 'お気に入りに追加';
    favorite.value = 0;
  } else {
    favorite.classList.add('active');
    favoriteText.textContent = 'お気に入り済み';
    favorite.value = 1;
  }

});