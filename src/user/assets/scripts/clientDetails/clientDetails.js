// 星をvalueの値に応じて出力
let counts = document.querySelectorAll('.list-star-value');
counts.forEach(count => {
  let cnt = count.getAttribute("value");
  console.log(cnt);
  let new_element = '';
  for (let i = 0; i < 5; i++) {
      if (i < cnt) {
        new_element += '<i class="fas fa-star"></i>'; // 実装に合わせて、適切なクラス名やアイコンを指定する
      }
  }
  console.log(new_element)
  count.innerHTML = new_element;
});
// サクセスストーリーのスライドショー
let mySwiper = new Swiper ('.swiper', {
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
// お気に入りボタンを押したら色が変わる、テキストが変更される
let favorite = document.querySelector('.favorite-btn');
let favoriteText = document.querySelector('.favorite-btn-text');
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

function addToFavorites() {
  // これ解除すれば中身が初期化するのでわかりやすい
  // localStorage.clear();
  let favorite = document.querySelector('.favorite-btn');
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
// レダーチャートを表示
let stars = [];
let starCounts = counts.forEach(count => {
  let starCount = count.getAttribute("value");
  stars.push(starCount);
})
var options = {
  series: [{
    data: stars,
  }],
  chart: {
    height: '260',
    type: 'radar',
    toolbar: {
      show: false
    },
  },
  xaxis:{
    categories: ['求人数', 'サポート力', '内定獲得実績', '内定実績', '業種の多さ']
  },
};

window.addEventListener('load', () => {
  let favorite = document.querySelector('.favorite-btn');
  let companyID = favorite.getAttribute('data-id');
  let currentTime = new Date().toLocaleString();

  // ローカルストレージからお気に入り情報を取得
  const histories = JSON.parse(localStorage.getItem("histories")) || [];

  if (histories.length === 0) {
    // 企業の情報（仮のデータ）
    let companyName = favorite.getAttribute('data-name');
    let companyURL = favorite.getAttribute('data-url');

    // お気に入り情報を追加
    histories.push({ name: companyName, url: companyURL, id: companyID, time: currentTime });
  } else {
    // 既に同じIDの企業がローカルストレージ内に存在するかチェック
    const existingIndex = histories.findIndex(item => item.id === companyID);

    if (existingIndex !== -1) {
      // 同じIDの企業が既に登録されている場合は削除
      histories.splice(existingIndex, 1);// 企業の情報（仮のデータ）
      let companyName = favorite.getAttribute('data-name');
      let companyURL = favorite.getAttribute('data-url');

      // お気に入り情報を追加
      histories.push({ name: companyName, url: companyURL, id: companyID, time: currentTime });
    } else {
      // 企業の情報（仮のデータ）
      let companyName = favorite.getAttribute('data-name');
      let companyURL = favorite.getAttribute('data-url');

      // お気に入り情報を追加
      histories.push({ name: companyName, url: companyURL, id: companyID, time: currentTime });
    }
  }

  // ローカルストレージに保存
  localStorage.setItem("histories", JSON.stringify(histories));
});
var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
