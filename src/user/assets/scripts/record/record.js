// 履歴の情報をローカルストレージから取得
const favorites = JSON.parse(localStorage.getItem("histories")) || [];
// localStorage.clear();
// お気に入り企業の情報をHTMLに書き換え
const service_box = document.getElementById("service-wrapper");

let str = "";

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
  <button type="button" class="favorite-btn" value="" id="favoriteButton" data-name="${companyName}" data-url="${companyURL}" data-id="${companyID}" onclick="addToFavorites(this)">
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

// お気に入りボタンを押したら色が変わる、テキストが変更される
let favorite_btns = document.querySelectorAll(".favorite-btn");
let favoriteTexts = document.querySelectorAll(".favorite-btn-text");

favorite_btns.forEach((favorite_btn, index) => {
  favorite_btn.addEventListener("click", function () {
    if (favorite_btn.classList.contains("active")) {
      favorite_btn.classList.remove("active");
      favoriteTexts[index].textContent = "お気に入りに追加";
      favorite_btn.value = 0;
    } else {
      favorite_btn.classList.add("active");
      favoriteTexts[index].textContent = "お気に入り済み";
      favorite_btn.value = 1;
    }
    // addToFavorites(favorite_btn);
  });
});

function addToFavorites(button) {
  // 企業の情報（仮のデータ）
  let companyName = button.getAttribute("data-name");
  let companyURL = button.getAttribute("data-url");
  let companyID = button.getAttribute("data-id");
  let currentTime = new Date().toLocaleString();
  // localStorageお気に入り情報があるかどうかチェック
  if (localStorage.favorites !== undefined) {
    // let favorite_btn = document.querySelector('.favorite-btn');
    // console.log(favorite_btn);
    // let companyID = favorite_btn.getAttribute('data-id');
    console.log(button);

    console.log(companyID);

    // ローカルストレージからお気に入り情報を取得
    const favorites = JSON.parse(localStorage.favorites);

    if (button.value == 0) {
      // 既に同じIDの企業がローカルストレージ内に存在するかチェック
      const existingIndex = favorites.findIndex(
        (item) => item.id === companyID
      );

      if (existingIndex !== -1) {
        // 同じIDの企業が既に登録されている場合は削除
        favorites.splice(existingIndex, 1);
      }
      // お気に入り情報を追加
      favorites.push({
        name: companyName,
        url: companyURL,
        id: companyID,
        time: currentTime,
      });

      // ローカルストレージに保存
      localStorage.setItem("favorites", JSON.stringify(favorites));
    } else {
      const existingIndex = favorites.findIndex(
        (item) => item.id === companyID
      );
      favorites.splice(existingIndex, 1);
      localStorage.setItem("favorites", JSON.stringify(favorites));
    }
  } else {
    // lcocalStorageにお気に入り情報がない場合
    const favorites = [{
      name: companyName,
      url: companyURL,
      id: companyID,
      time: currentTime,
    }];
    localStorage.setItem("favorites", JSON.stringify((favorites)));
  }
}

// // ローカルストレージの中にidが存在しているのかチェックしてお気に入りボタンを変更する。
// const urlParams = new URLSearchParams(window.location.search);
// const id = urlParams.get('id');
// console.log(id);

// function checkIfIdExists(id) {
//   // ローカルストレージからデータを取得
//   const favorites = JSON.parse(localStorage.getItem("favorites")) || [];

//   // データ内をループしてidの存在をチェック
//   for (const item of favorites) {
//     if (item.id === id) {
//       // 指定したidが存在する場合
//       return true;
//     }
//   }
//   // 指定したidが存在しない場合
//   return false;
// }

// const idExists = checkIfIdExists(id);

// if (idExists) {
//   favorite_btns.forEach((favorite_btn, index) => {
//     if (favorite_btn.getAttribute('data-id') === id) {
//       favorite_btn.classList.add('active');
//       favoriteTexts[index].textContent = 'お気に入り済み';
//       favorite_btn.value = 1;
//     }
//   });
// }
