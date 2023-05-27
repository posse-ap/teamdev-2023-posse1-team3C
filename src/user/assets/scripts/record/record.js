// 履歴の情報をローカルストレージから取得
const histories = JSON.parse(localStorage.getItem("histories")) || [];
localStorage.clear();
// お気に入り企業の情報をHTMLに書き換え
const service_box = document.getElementById("service-wrapper");

let str = "";

histories.forEach((favorite) => {
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

// 履歴に企業がなかった場合の処理
const historiesAlert = document.getElementById("service-alert");
let historiesAlertStr = "";
if (histories.length === 0) {
  historiesAlertStr += `
<div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div>
    <span class="font-medium">チェックした企業が存在しません。</span><br>一覧から気になる企業をチェックしてみよう！
  </div>
</div>
  `;
}
historiesAlert.innerHTML = historiesAlertStr;

// お気に入りボタンを押したら色が変わる、テキストが変更される
let favorite_btns = document.querySelectorAll(".favorite-btn");
let favoriteTexts = document.querySelectorAll(".favorite-btn-text");

favorite_btns.forEach((favorite_btn, index) => {
  console.log(favorite_btn);
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
    const favorites = [
      {
        name: companyName,
        url: companyURL,
        id: companyID,
        time: currentTime,
      },
    ];
    localStorage.setItem("favorites", JSON.stringify(favorites));
  }
}

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

window.addEventListener("load", () => {
  let favorite_btns = document.querySelectorAll(".favorite-btn");
  favorite_btns.forEach((favorite_btn) => {
    let id = favorite_btn.getAttribute("data-id");
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
    let favoriteText = favorite_btn.querySelector(".favorite-btn-text");

    let idExists = checkIfIdExists(id);
    if (idExists) {
      favorite_btn.classList.add("active");
      favoriteText.textContent = "お気に入り済み";
      favorite_btn.value = 1;
    }
  });
});
